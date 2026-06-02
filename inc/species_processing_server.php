<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include_once 'config.inc.php';


if (isset($_GET["custom-fetch"])){

$html = "";

if ($species = $AdminTask->Get_All_Species()){
    $sn = 0;
    foreach ($species as $key => $specy){
    $sn++;
    $html .= "<tr id=\"{$specy->id}\">
    <td>{$sn}</td>
    <td>{$specy->species_name}</td>
    <td>{$specy->family_name}</td>
    <td>{$specy->common_name}</td>
    <td>{$specy->local_name}</td>
    <td>{$specy->ids_no}</td>
    <td><span class=\"badge bg-label-info\">{$specy->compound_count} Compounds</span></td>
    <td>
    <a href=\"edit-species.php?id={$specy->id}\" type=\"button\" title=\"Edit\" class=\"btn btn-sm btn-primary\"><span class=\"tf-icons bx bx-pen\"></span> Edit</a>
    <button type=\"button\" title=\"Delete\" class=\"btn btn-sm btn-danger\" onClick=\"window.confirm('Are you sure want to delete this item ?') && delete_data_ajax('disabled_data', 'species', '{$specy->id}')\"><span class=\"tf-icons bx bx-trash\"></span></button>
  </td>
  </tr>";
  // if ($key == 5) break;
  }
}

echo $html;
}
