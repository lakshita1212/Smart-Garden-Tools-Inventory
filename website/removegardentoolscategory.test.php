<?php
/*
Lakshita Madhavan November 1, 2024 lm66@njit.edu
IT 202 001  || Phase 3 Assignment*/

error_log("\$_GET " . print_r($_GET, true));
include("gardentoolscategory.php");
$ToolCategoryID = $_GET['ToolCategoryID'];
$category = Category::findCategory($ToolCategoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $ToolCategoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $ToolCategoryID</h2>\n";


?>

