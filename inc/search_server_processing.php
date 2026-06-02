<?php
error_reporting(0);
ini_set('display_errors', 0);

function safe_utf8($str) {
    if (is_array($str)) {
        foreach ($str as $k => $v) {
            $str[$k] = safe_utf8($v);
        }
        return $str;
    }
    return mb_convert_encoding($str, 'UTF-8', 'UTF-8');
}

try {
    ob_start();
    include_once 'config.inc.php';
    ob_clean();

    if (isset($_GET['s']) && !empty($_GET['s'])) {
        $initial = addslashes($_GET['s']);
        $whereAll = "status = 1 AND species_name LIKE '$initial%'";
    } else {
        $whereAll = 'status = 1';
    }

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

    require 'ssp.class.php';

    $results = SSP::complex($_GET, $sql_details, $table, $primaryKey, $columns, null, $whereAll);

    if (isset($results['data']) && count($results['data']) > 0) {
        $AdminTask = new Software\Controller\AdminController();
        $familyCache = [];

        foreach ($results['data'] as $key => $row) {
            $speciesId = $row[4];
            $speciesLink = urlencode($row[6]);
            $familyId = $row[1];

            // 1. Link species name
            $results['data'][$key][0] = "<a href='species-details?specy=" . $speciesLink . "'>" . htmlspecialchars(safe_utf8($row[0]), ENT_QUOTES) . "</a>";

            // 2. Get Family Name
            if (!isset($familyCache[$familyId])) {
                $familyObj = $AdminTask->Get_Species_Family_Name($familyId);
                $familyCache[$familyId] = $familyObj ? htmlspecialchars(safe_utf8($familyObj->family_name), ENT_QUOTES) : 'N/A';
            }
            $results['data'][$key][1] = $familyCache[$familyId];

            // 3. Get Compound Count
            $compoundCountObj = $AdminTask->Get_Count_Nums_Of_Compunds_Species($speciesId);
            $count = $compoundCountObj ? $compoundCountObj->totalCount : 0;
            $results['data'][$key][4] = "<a href='species-compounds-list?specy=" . $speciesLink . "'>" . $count . "</a>";

            // 4. Sanitize strings
            $results['data'][$key][2] = htmlspecialchars(safe_utf8($row[2]), ENT_QUOTES);
            $results['data'][$key][3] = htmlspecialchars(safe_utf8($row[3]), ENT_QUOTES);
        }
    }

    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($results);

} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
?>