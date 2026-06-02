<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'config.inc.php';

if (isset($_GET["custom-fetch"])){
if (isset($_GET['initial']) && !empty($_GET['initial'])) {
    $initial = $_GET['initial'];
    $whereAll = "compounds_name LIKE '$initial%'";
} else {
    $whereAll = "";
}


/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
// $table = 'species_tbl';
$table = 'compounds_cati_tbl';


// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = [
    ['db' => 'compounds_name', 'dt' => 0],
    ['db' => 'synonyms', 'dt' => 1],
    ['db' => 'compound_code', 'dt' => 2],
    ['db' => 'pubchem', 'dt' => 3],
    ['db' => 'molecular_formula', 'dt' => 4],
    ['db' => 'in_chl', 'dt' => 5],
    ['db' => 'id', 'dt' => 6],
    ['db' => 'smiles', 'dt' => 7],
    ['db' => 'reference_information', 'dt' => 8],
    ['db' => 'properties', 'dt' => 9],
    
   
];

// SQL server connection information
$sql_details = [
    'user' => 'eduowrav_nmppdb_user', 
    'pass' => 'Nmppdb@1234',
    'db' => 'eduowrav_nmppdb',
    'host' => 'localhost',
];

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require 'ssp.class.php';


$utf =  SSP::complex(
        $_GET,
        $sql_details,
        $table,
        $primaryKey,
        $columns,
        $whereResult = null,
        $whereAll
    );

$data = $utf["rawData"];

$html = "";

foreach ($data as $key => $item){
    $html .= "<tr>
    <td>".htmlspecialchars($item['compounds_name'])."</td>
    <td>".htmlspecialchars($item['synonyms'])."</td>
    <td>".htmlspecialchars($item['compound_code'])."</td>
    <td>".($item["id"] != 9? $item['pubchem'] : '')."</td>
    <td>".htmlspecialchars($item['molecular_formula'])."</td>";
    $html .= "<td><a href='species-with-particular-compound?comp=" .
            $item['id'] .
            "'>" .
            $AdminTask->Get_Count_Nums_Of_Species_Have_This_Compunds(
                $item["id"]
            )->totalCount ."</a></td>";
    $html .= "<td>";
    $html .= '<a href="edit-compound?id=' .
            $item['id'] .
            '">
            <button type="button" title="Edit"
    id="editButton_' . $item['id'] . '"                
    class="btn rounded-pill btn-icon btn-primary btn-edit">
    <span class="tf-icons bx bx-pen"></span>
</button> <a> <button type="button" title="Delete"
        class="btn rounded-pill btn-icon btn-danger"
        onClick="if (window.confirm(\'Are you sure you want to delete this item?\')) delete_data_ajax(\'disabled_data\', \'compounds_cati\',' . $item['id']. ');">
        <span class="tf-icons bx bx-trash"></span>
    </button>';
    $html .= "</td>";
    
    $html .= "</tr>";
}

echo $html;

die();
}

if (isset($_GET['initial']) && !empty($_GET['initial'])) {
    $initial = $_GET['initial'];
    $whereAll = "compounds_name LIKE '$initial%'";
} else {
    $whereAll = "";
}


/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */

// DB table to use
// $table = 'species_tbl';
$table = 'compounds_cati_tbl';


// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = [
    ['db' => 'compounds_name', 'dt' => 0],
    ['db' => 'synonyms', 'dt' => 1],
    ['db' => 'compound_code', 'dt' => 2],
    ['db' => 'pubchem', 'dt' => 3],
    ['db' => 'molecular_formula', 'dt' => 4],
    ['db' => 'in_chl', 'dt' => 5],
    ['db' => 'id', 'dt' => 6],
    ['db' => 'smiles', 'dt' => 7],
    ['db' => 'reference_information', 'dt' => 8],
    ['db' => 'properties', 'dt' => 9],
    
   
];

// SQL server connection information
$sql_details = [
    'user' => 'eduowrav_nmppdb_user', 
    'pass' => 'Nmppdb@1234',
    'db' => 'eduowrav_nmppdb',
    'host' => 'localhost',
];

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require 'ssp.class.php';


$utf =  SSP::complex(
        $_GET,
        $sql_details,
        $table,
        $primaryKey,
        $columns,
        $whereResult = null,
        $whereAll
    );

$dataTableData = json_encode($utf);


$newData = json_decode($dataTableData)->data;
$newDataTableData = json_decode($dataTableData);
$newDataTableData = (object) $utf;

if (count($newData) > 0 ) {
    foreach ($newData as $key => $compound) {
        $newData[$key][0] =
            "<a href='compounds-detail?compound=" .
            $newData[$key][6] .
            "'>" .
            $newData[$key][0] .
            '<a>';
        $newData[$key][5] =
            "<a href='species-with-particular-compound?comp=" .
            $newData[$key][6] .
            "'>" .
            $AdminTask->Get_Count_Nums_Of_Species_Have_This_Compunds(
                $newData[$key][6]
            )->totalCount .
            '<a>';
            $newData[$key][6] = '<a href="edit-compound?id=' .
            $newData[$key][6] .
            '">
            <button type="button" title="Edit"
    id="editButton_' . $newData[$key][6] . '"                
    class="btn rounded-pill btn-icon btn-primary btn-edit">
    <span class="tf-icons bx bx-pen"></span>
</button> <a> <button type="button" title="Delete"
        class="btn rounded-pill btn-icon btn-danger"
        onClick="if (window.confirm(\'Are you sure you want to delete this item?\')) delete_data_ajax(\'disabled_data\', \'compounds_cati\',' . $newData[$key][6]. ');">
        <span class="tf-icons bx bx-trash"></span>
    </button>';

    }
    $newDataTableData->data = $newData;
    $newDataTableData = (array) $newDataTableData;
    echo json_encode((array)$newDataTableData);
    
} else {
    echo $dataTableData;
}
?>