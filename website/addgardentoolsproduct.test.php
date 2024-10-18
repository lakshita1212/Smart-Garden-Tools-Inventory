<?php
/*
Lakshita Madhavan October 17, 2024 lm66@njit.edu
IT 202 001  || Phase 2 Assignment*/
include('gardentoolsproduct.php'); // Ensure this line is uncommented to include the Item class
session_start(); // Start the session to check if the user is logged in

if (isset($_SESSION['login'])) {
    $ToolProductID = $_GET['ToolProductID'];
    
    if ((trim($ToolProductID) == '') || !is_numeric($ToolProductID)) {
        echo "<h2>Sorry, you must enter a valid Tool Product ID number</h2>\n";
    } else {
        $ToolProductCode = $_GET['ToolProductCode'];
        $ToolProductName = $_GET['ToolProductName'];
        $ToolProductColor = $_GET['ToolProductColor'];
        $ToolDescription = $_GET['ToolDescription'];
        $ToolCategoryID = $_GET['ToolCategoryID'];
        $ToolWholesalePrice = $_GET['ToolWholesalePrice'];
        $ToolListPrice = $_GET['ToolListPrice'];
        $DateCreated = date("Y-m-d H:i:s");

        $item = new Item(
            $ToolProductID,
            $ToolProductCode,
            $ToolProductName,
            $ToolProductColor,
            $ToolDescription,
            $ToolCategoryID,
            $ToolWholesalePrice,
            $ToolListPrice,
            $DateCreated
        );

        $result = $item->saveItem();
        if ($result) {
            echo "<h2>New Item #$ToolProductID successfully added</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that item</h2>\n";
        }
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
