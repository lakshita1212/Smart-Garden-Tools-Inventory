<?php
/*
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
*/

include_once("gardentoolsproduct.php");

if (isset($_SESSION['login'])) {
    $ToolProductID = filter_input(INPUT_POST, 'ToolProductID', FILTER_VALIDATE_INT);
    $answer = $_POST['answer']; 
   
    if ($answer == "Update Item") {
        $Product = Item::findItem($ToolProductID);
        if ($Product) {
            $ToolProductName = filter_input(INPUT_POST, 'ToolProductName', FILTER_SANITIZE_STRING);
            $ToolCategoryID = filter_input(INPUT_POST, 'ToolCategoryID', FILTER_VALIDATE_INT);
            $ToolListPrice = filter_input(INPUT_POST, 'ToolListPrice', FILTER_VALIDATE_FLOAT);
            $ToolWholesalePrice = filter_input(INPUT_POST, 'ToolWholesalePrice', FILTER_VALIDATE_FLOAT);

            $errors = [];
            if ($ToolProductName === false || $ToolProductName === null) {
                $errors[] = "Invalid Product Name";
            }
            if ($ToolCategoryID === false || $ToolCategoryID === null) {
                $errors[] = "Invalid Category ID";
            }
            if ($ToolListPrice === false || $ToolListPrice === null || $ToolListPrice <= 0) {
                $errors[] = "Invalid List Price";
            }
            if ($ToolWholesalePrice === false || $ToolWholesalePrice === null || $ToolWholesalePrice <= 0) {
                $errors[] = "Invalid Wholesale Price";
            }

            if (empty($errors)) {
                $Product->ToolProductName = $ToolProductName;
                $Product->ToolCategoryID = $ToolCategoryID;
                $Product->ToolListPrice = $ToolListPrice;
                $Product->ToolWholesalePrice = $ToolWholesalePrice;

                $result = $Product->updateItem();
                if ($result) {
                    echo "<h2>Product $ToolProductID updated successfully</h2>\n";
                } else {
                    echo "<h2>Problem updating Product $ToolProductID</h2>\n";
                }
            } else {
                echo "<h2>Error updating Product $ToolProductID:</h2>\n";
            }
        } else {
            echo "<h2>Product $ToolProductID not found</h2>\n";
        }
    } else { 
        echo "<h2>Update Canceled for item $ToolProductID</h2>\n"; 
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>