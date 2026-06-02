<?php
error_reporting(0);
ini_set('display_errors', 0);

header('Content-Type: application/json');

$table      = 'compounds_cati_tbl';
$primaryKey = 'id';

$columns = [
    ['db' => 'compound_code',      'dt' => 0],   // Compound ID (NMPC-xxx)
    ['db' => 'compounds_name',     'dt' => 1],   // Compound Name
    ['db' => 'synonyms',           'dt' => 2],   // Synonyms
    ['db' => 'pubchem',            'dt' => 3],   // Pubchem ID
    ['db' => 'molecular_formula',  'dt' => 4],   // Molecular Formula
    ['db' => 'id',                 'dt' => 5],   // No of Sources
    ['db' => 'cati_link',          'dt' => 'cati_link'],
];

$sql_details = [
    'user' => 'eduowrav_nmppdb_user',
    'pass' => 'Nmppdb@1234',
    'db'   => 'eduowrav_nmppdb',
    'host' => 'localhost',
];

require 'ssp.class.php';

// Handle alphabetical initial filter sent by the page's A-Z links
$whereClause = "status = 1";
if (!empty($_GET['initial'])) {
    $initial = preg_replace('/[^a-zA-Z0-9]/', '', $_GET['initial']);
    if ($initial !== '') {
        $whereClause .= " AND compounds_name LIKE '" . $initial . "%'";
    }
}

$results = SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, null, $whereClause);

if (!empty($results['data'])) {

    // Collect all compound primary-key IDs and cati_links in one pass
    $ids   = [];
    $links = [];
    foreach ($results['data'] as $key => $row) {
        $ids[$key]   = (int) ($row[5] ?? 0);
        $links[$key] = $row['cati_link'] ?? '';
    }

    // Single batch query for all source counts (replaces N individual calls)
    $countMap = [];
    try {
        $pdo = new PDO(
            'mysql:host=' . $sql_details['host'] . ';dbname=' . $sql_details['db'] . ';charset=utf8',
            $sql_details['user'],
            $sql_details['pass'],
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT]
        );
        $unique  = array_values(array_unique($ids));
        $holders = implode(',', array_fill(0, count($unique), '?'));
        $stmt    = $pdo->prepare(
            "SELECT compound_id, COUNT(id) AS cnt
             FROM species_compounds_tbl
             WHERE status = 1 AND compound_id IN ($holders)
             GROUP BY compound_id"
        );
        $stmt->execute($unique);
        while ($r = $stmt->fetch(PDO::FETCH_OBJ)) {
            $countMap[(int) $r->compound_id] = (int) $r->cnt;
        }
    } catch (Throwable $e) {
        $countMap = [];
    }

    // Render each row
    foreach ($results['data'] as $key => $row) {
        $cid  = $ids[$key];
        $link = $links[$key];
        $cnt  = $countMap[$cid] ?? 0;

        // Compound Name — clickable link to compound detail
        $results['data'][$key][1] = "<a href='compounds-detail?compound=" . $link . "'>" . $row[1] . "</a>";

        // No of Sources — clickable number that lists species containing this compound
        $results['data'][$key][5] = "<a href='species-with-particular-compound?comp=" . $link . "'>" . $cnt . "</a>";
    }
}

// JSON_INVALID_UTF8_SUBSTITUTE handles non-UTF-8 chars in DB fields (synonyms, SMILES etc.)
echo json_encode($results, JSON_INVALID_UTF8_SUBSTITUTE | JSON_UNESCAPED_UNICODE);
?>
