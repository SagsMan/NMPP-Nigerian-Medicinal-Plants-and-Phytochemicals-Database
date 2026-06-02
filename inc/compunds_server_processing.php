<?php
error_reporting(0);
ini_set('display_errors', 0);
ob_start();
include_once 'config.inc.php';
ob_clean();

$table = 'compounds_cati_tbl';
$primaryKey = 'id';

$columns = [
    ['db' => 'pubchem', 'dt' => 0],           // Compound ID (first column)
    ['db' => 'compounds_name', 'dt' => 1],     // Compound Name (second column)
    ['db' => 'compound_code', 'dt' => 2],      // Synonyms (third column)
    ['db' => 'molecular_formula', 'dt' => 3],  // Pubchem ID
    ['db' => 'smiles', 'dt' => 4],             // Molecular Formula
    ['db' => 'id', 'dt' => 5],                 // No of Sources
    ['db' => 'cati_link', 'dt' => 'cati_link'],
];

header('Content-Type: application/json');

// SQL server connection information
$sql_details = [
    'user' => 'eduowrav_nmppdb_user',
    'pass' => 'Nmppdb@1234',
    'db' => 'eduowrav_nmppdb',
    'host' => 'localhost'
];

require 'ssp.class.php';

$results = SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, null, "status = 1");

if (isset($results['data']) && count($results['data']) > 0) {
    foreach ($results['data'] as $key => $row) {
        $compoundId = $row[5];
        $compoundLink = $row['cati_link'];

        // 1. Link Compound Name (now at position 1)
        $results['data'][$key][1] = "<a href='compounds-detail?compound=" . $compoundLink . "'>" . $row[1] . "</a>";

        // 2. Display Number of Sources directly (instead of View Details button)
        $sourcesObj = $AdminTask->Get_Count_Nums_Of_Species_Have_This_Compunds($compoundId);
        $results['data'][$key][5] = $sourcesObj ? (int)$sourcesObj->totalCount : 0;
    }
}

echo json_encode($results);
?>
