<?php
/*
Lakshita Madhavan October 17, 2024 lm66@njit.edu
IT 202 001  || Phase 2 Assignment*/
include("gardentoolscategory.php");
$ToolCategoryID = $_GET['ToolCategoryID'];
$category = Category::findCategory($ToolCategoryID);
$category->ToolCategoryID = $_GET['ToolCategoryID'];
$category->ToolCategoryCode = $_GET['ToolCategoryCode'];
$category->ToolCategoryName = $_GET['ToolCategoryName'];
$category->ToolShelfNumber = $_GET['ToolShelfNumber'];
$category->DateCreated = $_GET['DateCreated'];

$result = $category->updateCategory();
if ($result) {
   echo "<h2>Category $ToolCategoryID updated</h2>\n";
} else {
   echo "<h2>Problem updating category $ToolCategoryID</h2>\n";
}
?>

