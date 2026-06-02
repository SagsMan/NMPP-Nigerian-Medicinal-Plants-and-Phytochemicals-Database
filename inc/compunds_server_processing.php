<?php
error_reporting(0);
ini_set('display_errors', 0);
ob_start();
include_once 'config.inc.php';
ob_clean();

$table = 'compounds_cati_tbl';
$primaryKey = 'id';

$columns = [
    ['db' => 'compound_code', 'dt' => 0],      // Compound ID (NMPC-xxx) - first column
    ['db' => 'compounds_name', 'dt' => 1],     // Compound Name - second column
    ['db' => 'synonyms', 'dt' => 2],           // Synonyms - third column
    ['db' => 'pubchem', 'dt' => 3],            // Pubchem ID - fourth column
    ['db' => 'molecular_formula', 'dt' => 4],  // Molecular Formula - fifth column
    ['db' => 'id', 'dt' => 5],                 // No of Sources - sixth column
    ['db' => 'cati_link', 'dt' => 'cati_link'],
];

header('Content-Type: application/json');

$sql_details = [
    'user' => 'eduowrav_nmppdb_user',
    'pass' => 'Nmppdb@1234',
    'db'   => 'eduowrav_nmppdb',
    'host' => 'localhost'
];

require 'ssp.class.php';

$results = SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, null, "status = 1");

if (isset($results['data']) && count($results['data']) > 0) {

    // Collect all compound IDs and links in one pass
    $compoundIds   = [];
    $compoundLinks = [];
    foreach ($results['data'] as $key => $row) {
        $compoundIds[$key]   = (int)$row[5];
        $compoundLinks[$key] = $row['cati_link'];
    }

    // ONE batch query to get all source counts — replaces 15 individual calls
    $pdo = new PDO(
        'mysql:host=' . $sql_details['host'] . ';dbname=' . $sql_details['db'] . ';charset=utf8',
        $sql_details['user'],
        $sql_details['pass'],
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]
    );
    $uniqueIds   = array_unique(array_values($compoundIds));
    $placeholders = implode(',', array_fill(0, count($uniqueIds), '?'));
    $stmt = $pdo->prepare(
        "SELECT compound_id, COUNT(id) AS totalCount
         FROM species_compounds_tbl
         WHERE status = 1 AND compound_id IN ($placeholders)
         GROUP BY compound_id"
    );
    $stmt->execute(array_values($uniqueIds));
    $countMap = [];
    while ($r = $stmt->fetch(PDO::FETCH_OBJ)) {
        $countMap[(int)$r->compound_id] = (int)$r->totalCount;
    }

    // Render each row
    foreach ($results['data'] as $key => $row) {
        $cid  = $compoundIds[$key];
        $link = $compoundLinks[$key];
        $cnt  = isset($countMap[$cid]) ? $countMap[$cid] : 0;

        // 1. Link Compound Name (column 1)
        $results['data'][$key][1] = "<a href='compounds-detail?compound=" . $link . "'>" . $row[1] . "</a>";

        // 2. No of Sources — clickable number linking to species list for this compound
        $results['data'][$key][5] = "<a href='species-with-particular-compound?comp=" . $link . "'>" . $cnt . "</a>";
    }
}

echo json_encode($results);
?>
