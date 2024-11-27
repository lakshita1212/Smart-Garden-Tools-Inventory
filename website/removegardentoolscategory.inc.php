<?php

/*
Lakshita Madhavan November 26, 2024 lm66@njit.edu
IT 202 001  || Phase 5 Assignment
*/


// error_log("\$_GET " . print_r($_GET, true));
// include("category.php");
if (isset($_SESSION['login'])) {
   $ToolCategoryID = $_POST['ToolCategoryID'];
   $category = Category::findCategory($ToolCategoryID);
   $result = $category->removeCategory();
   if ($result)
       echo "<h2>Category $ToolCategoryID removed</h2>\n";
   else
       echo "<h2>Sorry, problem removing category $ToolCategoryID</h2>\n";
} else {
   echo "<H2>Please login first</h2>\n";
}
?>
