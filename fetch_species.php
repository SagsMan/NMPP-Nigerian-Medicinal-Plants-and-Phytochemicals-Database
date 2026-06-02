<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
echo "DEBUG: SCRIPT STARTED"; 


function safe_utf8($str) {
    if (is_array($str)) return array_map('safe_utf8', $str);
    if (!is_string($str)) return $str;
    return mb_convert_encoding($str, 'UTF-8', 'UTF-8');
}

try {
    // Include config from the inc folder
    include_once 'inc/config.inc.php';

    $table = 'species_tbl';
    $primaryKey = 'id';

    $columns = [
        ['db' => 'species_name', 'dt' => 0],
        ['db' => 'family_id', 'dt' => 1],
        ['db' => 'common_name', 'dt' => 2],
        ['db' => 'local_name', 'dt' => 3],
        ['db' => 'id', 'dt' => 4], 
        ['db' => 'ids_no', 'dt' => 5], 
        ['db' => 'species_link', 'dt' => 6],
    ];

    $sql_details = [
        'user' => 'eduowrav_nmppdb_user',
        'pass' => 'Nmppdb@1234',
        'db'   => 'eduowrav_nmppdb',
        'host' => 'localhost'
    ];

    if (isset($_GET['initial']) && !empty($_GET['initial'])) {
        $initial = addslashes($_GET['initial']);
        $whereAll = "status = 1 AND species_name LIKE '$initial%'";
    } else {
        $whereAll = "status = 1";
    }

    require 'inc/ssp.class.php';

    $results = SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, null, $whereAll);

    if (isset($results['error'])) {
        die(json_encode(['error' => 'SSP ERROR: ' . $results['error']]));
    }

    if (isset($results['data'])) {
        $AdminTask = new Software\Controller\AdminController();
        $familyCache = [];

        foreach ($results['data'] as $key => $row) {
            $speciesId = $row[4];
            $speciesLink = urlencode($row[6]);
            $speciesName = htmlspecialchars(safe_utf8($row[0]), ENT_QUOTES);
            $familyId = $row[1];

            // 0. Name
            $results['data'][$key][0] = "<a href='species-details?specy=" . $speciesLink . "'>" . $speciesName . "</a>";

            // 1. Family
            if (!isset($familyCache[$familyId])) {
                $familyObj = $AdminTask->Get_Species_Family_Name($familyId);
                $familyCache[$familyId] = $familyObj ? htmlspecialchars(safe_utf8($familyObj->family_name), ENT_QUOTES) : 'N/A';
            }
            $results['data'][$key][1] = $familyCache[$familyId];

            // 4. Compound Count
            $compoundCountObj = $AdminTask->Get_Count_Nums_Of_Compunds_Species($speciesId);
            $count = $compoundCountObj ? $compoundCountObj->totalCount : 0;
            $results['data'][$key][4] = "<a href='species-compounds-list?specy=" . $speciesLink . "'>" . $count . "</a>";
            
            // Sanitize others
            $results['data'][$key][2] = htmlspecialchars(safe_utf8($row[2]), ENT_QUOTES);
            $results['data'][$key][3] = htmlspecialchars(safe_utf8($row[3]), ENT_QUOTES);
            $results['data'][$key][5] = htmlspecialchars(safe_utf8($row[5]), ENT_QUOTES);
        }
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($results);

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>
