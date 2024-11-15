<?php
/*
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
*/
include_once("gardentoolsproduct.php");

$items = Item::getItems();
foreach ($items as $item) {
    $ToolProductID = $item->ToolProductID;
    $ToolProductCode = $item->ToolProductCode;  
    $ToolProductName = $item->ToolProductName; 
    $ToolListPrice = $item->ToolListPrice; 
    
    $option = "$ToolProductID - $ToolProductCode - $ToolProductName - $ToolListPrice"; 
    echo "$option<br>"; 
}
?>
