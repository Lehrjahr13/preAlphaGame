<?php

include 'playModel.php';

$resourcesObj = new Resources(true);
$buildingsObj = new Buildings(true);

$returnObj = "<table border = '1'; id='resources'><tr>";

require_once 'config.php';
foreach ($resourcesData as $name => $val) {
    $returnObj .= "<td>" . $name . ": " . $resourcesObj->getAmt($name) . "</td>";
} 
$returnObj .= "</table></tr>";


$returnObj .= "<table border = '1'; id='buildings'>";
$returnObj .= "<tr><th>Gebäude</th><th>Menge</th><th>Kosten</th><th>Kaufen</th></tr>";
foreach ($buildingData as $name => $val) {
    $returnObj .= "<tr><td class= 'buildingName'>" . $name . "</td>";
    $returnObj .= "<td class= 'buildingAmt' >" . $buildingsObj->getAmt($name) . "</td>";
    $returnObj .= "<td class= 'buildingRequirements' >" . $buildingsObj->getRequirements($name) . "</td>";
    $returnObj .= "<td> <button class= 'addBuilding'> + </button></td></tr>";
    
} 
$returnObj .= "</table>";



echo $returnObj;


