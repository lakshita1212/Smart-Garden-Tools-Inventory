<?php

/*
Lakshita Madhavan November 26, 2024 lm66@njit.edu
IT 202 001  || Phase 5 Assignment
*/


// include("item.php");
if (isset($_SESSION['login'])) {
   $ToolProductID = $_POST['ToolProductID'];
   $item = Item::findItem($ToolProductID);
   $result = $item->removeItem();
   if ($result)
       echo "<h2>Item $ToolProductID removed</h2>\n";
   else
       echo "<h2>Sorry, problem removing item $ToolProductID</h2>\n";
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
