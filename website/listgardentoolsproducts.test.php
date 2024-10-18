<?php
/*
Lakshita Madhavan October 17, 2024 lm66@njit.edu
IT 202 001  || Phase 2 Assignment*/
include("gardentoolsproduct.php");

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
