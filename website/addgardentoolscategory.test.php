<?php
/*
Lakshita Madhavan October 17, 2024 lm66@njit.edu
IT 202 001  || Phase 2 Assignment*/

include("gardentoolscategory.php");
$ToolCategoryID = $_GET['ToolCategoryID'];
if ((trim($ToolCategoryID) == '') or (!is_numeric($ToolCategoryID))) {
  echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
} else {
  $ToolCategoryCode = $_GET['ToolCategoryCode'];
  $ToolCategoryName = $_GET['ToolCategoryName'];
  $ToolShelfNumber = $_GET['ToolShelfNumber'];
  $DateCreated = $_GET['DateCreated'];
  $category = new Category($ToolCategoryID, $ToolCategoryCode, $ToolCategoryName,$ToolShelfNumber,$DateCreated);
  $result = $category->saveCategory();
  if ($result) {
      echo "<h2>New Category #$ToolCategoryID successfully added</h2>\n";
      echo "<h2>$category</h2>\n";
  } else {
      echo "<h2>Sorry, there was a problem adding that category</h2>\n";
  }
}
?>
