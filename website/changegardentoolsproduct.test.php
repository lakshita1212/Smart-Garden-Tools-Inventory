<?php
/*
Lakshita Madhavan October 17, 2024 lm66@njit.edu
IT 202 001  || Phase 2 Assignment*/
include("gardentoolsproduct.php");
$ToolProductID = $_GET['ToolProductID'];
$Product = Item::findItem($ToolProductID);
$Product->ToolProductCode = $_GET['ToolProductCode'];
$Product->ToolProductName = $_GET['ToolProductName'];
$Product->ToolProductColor = $_GET['ToolProductColor'];
$Product->ToolDescription = $_GET['ToolDescription'];
$Product->ToolCategoryID = $_GET['ToolCategoryID'];
$Product->ToolWholesalePrice = $_GET['ToolWholesalePrice'];
$Product->ToolListPrice = $_GET['ToolListPrice'];
$Product->DateCreated = $_GET['DateCreated'];

$result = $Product->updateItem();
if ($result) {
   echo "<h2>Product $ToolProductID updated</h2>\n";
} else {
   echo "<h2>Problem updating Product $ToolProductID</h2>\n";
}
?>

