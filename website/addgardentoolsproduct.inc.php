<?php
/*
Lakshita Madhavan November 1, 2024 lm66@njit.edu
IT 202 001  || Phase 3 Assignment*/

include_once('gardentoolsproduct.php'); // Ensure this line is uncommented to include the Item class

if (isset($_SESSION['login'])) {
    $ToolProductID = $_POST['ToolProductID'];    
    if ((trim($ToolProductID) == '') || !is_numeric($ToolProductID)) {
        echo "<h2>Sorry, you must enter a valid Tool Product ID number</h2>\n";
    } else {
        $ToolProductCode = $_POST['ToolProductCode'];
        $ToolProductName = $_POST['ToolProductName'];
        $ToolProductColor = $_POST['ToolProductColor'];
        $ToolDescription = $_POST['ToolDescription'];
        $ToolCategoryID = $_POST['ToolCategoryID'];
        $ToolWholesalePrice = $_POST['ToolWholesalePrice'];
        $ToolListPrice = $_POST['ToolListPrice'];
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
