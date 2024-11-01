<?php
/*
Lakshita Madhavan November 1, 2024 lm66@njit.edu
IT 202 001  || Phase 3 Assignment*/

if (!isset($_REQUEST['ToolCategoryID']) or (!is_numeric($_REQUEST['ToolCategoryID']))) {
?>
   <h2>You did not select a valid categoryID to view.</h2>
   <a href="index.php?content=listgardentoolscategories">List Categories</a>
<?php
} else {
   $ToolCategoryID = $_REQUEST['ToolCategoryID'];
   $category = Category::findCategory($ToolCategoryID);
   if ($category) {
       echo $category;
       echo "<br><br>\n";
   } else {
       echo "<h2>Sorry, category $ToolCategoryID not found</h2>\n";
   }
}
?>
