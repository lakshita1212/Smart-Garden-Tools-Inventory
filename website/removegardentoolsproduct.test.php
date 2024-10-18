<?php
/*
Lakshita Madhavan October 17, 2024 lm66@njit.edu
IT 202 001  || Phase 2 Assignment*/
error_log("\$_GET " . print_r($_GET, true));
include("gardentoolsproduct.php");
$ToolProductID = $_GET['ToolProductID'];
$Product = Item::findItem($ToolProductID);
$result = $Product->removeItem();
if ($result)
   echo "<h2>Product $ToolProductID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing Product $ToolProductID</h2>\n";


?>

