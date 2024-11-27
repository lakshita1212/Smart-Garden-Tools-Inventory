<?php
/*
Lakshita Madhavan November 26, 2024 lm66@njit.edu
IT 202 001  || Phase 5 Assignment
*/

// include("category.php");
if (isset($_SESSION['login'])) {

   $ToolCategoryID = $_POST['ToolCategoryID'];
   $answer = $_POST['answer'];

   if ($answer == "Update Category") {
       $category = Category::findCategory($ToolCategoryID);

       $category->ToolCategoryID = $_POST['ToolCategoryID'];
       $category->ToolCategoryCode = $_POST['ToolCategoryCode'];
       $category->ToolCategoryName = $_POST['ToolCategoryName'];
       $category->ToolShelfNumber = $_POST['ToolShelfNumber'];
       $category->DateCreated = $_POST['DateCreated'];

       $result = $category->updateCategory();
       if ($result) {
           echo "<h2>Category $ToolCategoryID updated</h2>\n";
       } else {
           echo "<h2>Problem updating category $ToolCategoryID</h2>\n";
       }
   } else {
       echo "<h2>Update Canceled for category $ToolCategoryID</h2>\n";
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
