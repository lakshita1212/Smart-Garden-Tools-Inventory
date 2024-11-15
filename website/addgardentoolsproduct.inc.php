<?php

/*
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
*/

include_once('gardentoolsproduct.php');

if (isset($_SESSION['login'])) {
    $ToolProductID = filter_input(INPUT_POST, 'ToolProductID', FILTER_VALIDATE_INT);
    if ($ToolProductID === null || $ToolProductID === false) {
        echo "<h2>Sorry, you must enter a valid Tool Product ID number</h2>\n";
        exit;
    }

    $ToolWholesalePrice = filter_input(INPUT_POST, 'ToolWholesalePrice', FILTER_VALIDATE_FLOAT);
    if ($ToolWholesalePrice === null || $ToolWholesalePrice === false) {
        echo "<h2>Error: Wholesale Price must be a valid number</h2>\n";
        echo "<p>You entered: " . htmlspecialchars($_POST['ToolWholesalePrice']) . "</p>\n";
        echo "<a href=\"index.php?content=additemform\">Return to Add Item Form</a>\n";
        exit;
    }


    $ToolProductCode = htmlspecialchars($_POST['ToolProductCode']);
    $ToolProductName = htmlspecialchars($_POST['ToolProductName']);
    $ToolProductColor = htmlspecialchars($_POST['ToolProductColor']);
    $ToolDescription = htmlspecialchars($_POST['ToolDescription']);
    $ToolCategoryID = filter_input(INPUT_POST, 'ToolCategoryID', FILTER_VALIDATE_INT);
    $ToolListPrice = filter_input(INPUT_POST, 'ToolListPrice', FILTER_VALIDATE_FLOAT);
    $DateCreated = date("Y-m-d H:i:s");

    if (
        empty($ToolProductCode) || empty($ToolProductName) || empty($ToolProductColor) ||
        empty($ToolDescription) || $ToolCategoryID === false || $ToolListPrice === false
    ) {
        echo "<h2>All fields must be filled out with valid data.</h2>\n";
        echo "<a href=\"index.php?content=additemform\">Return to Add Item Form</a>\n";
        exit;
    }

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
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
