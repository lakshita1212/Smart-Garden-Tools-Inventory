<?php
/*
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
*/
include_once("gardentoolscategory.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $ToolCategoryID = $category->ToolCategoryID;
   $name = $ToolCategoryID . " - " . $category->ToolCategoryCode . ", " . $category->ToolCategoryName;
   echo "$name<br>";
}
?>
