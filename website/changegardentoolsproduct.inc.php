<?php
/*
Lakshita Madhavan November 1, 2024 lm66@njit.edu
IT 202 001  || Phase 3 Assignment*/

include_once("gardentoolsproduct.php");

if (isset($_SESSION['login'])) {
   $ToolProductID = $_POST['ToolProductID'];
   $answer = $_POST['answer']; 
   
   if ($answer == "Update Item") {
       $Product = Item::findItem($ToolProductID);
       if ($Product) {
           $Product->ToolProductName = $_POST['ToolProductName'];
           $Product->ToolCategoryID = $_POST['ToolCategoryID'];
           $Product->ToolListPrice = $_POST['ToolListPrice'];
 

           $result = $Product->updateItem();
           if ($result) {
               echo "<h2>Product $ToolProductID updated</h2>\n";
           } else {
               echo "<h2>Problem updating Product $ToolProductID</h2>\n";
           }
       } else {
           echo "<h2>Product $ToolProductID not found</h2>\n";
       }
   } else  { 
       echo "<h2>Update Canceled for item $ToolProductID</h2>\n"; 
   }
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
