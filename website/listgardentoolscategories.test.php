<?php
/*
Lakshita Madhavan October 17, 2024 lm66@njit.edu
IT 202 001  || Phase 2 Assignment*/
include("gardentoolscategory.php");
$categories = Category::getCategories();
foreach($categories as $category) {
   $ToolCategoryID = $category->ToolCategoryID;
   $name = $ToolCategoryID . " - " . $category->ToolCategoryCode . ", " . $category->ToolCategoryName;
   echo "$name<br>";
}
?>
