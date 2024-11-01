<?php
/*
Lakshita Madhavan November 1, 2024 lm66@njit.edu
IT 202 001  || Phase 3 Assignment*/

include_once("gardentoolscategory.php");

if (isset($_POST['ToolCategoryID'])) {
    $ToolCategoryID = $_POST['ToolCategoryID'];

    if ((trim($ToolCategoryID) == '') or (!is_numeric($ToolCategoryID))) {
        echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
    } else {
        $ToolCategoryCode = isset($_POST['ToolCategoryCode']) ? $_POST['ToolCategoryCode'] : '';
        $ToolCategoryName = isset($_POST['ToolCategoryName']) ? $_POST['ToolCategoryName'] : '';
        $ToolShelfNumber = isset($_POST['ToolShelfNumber']) ? $_POST['ToolShelfNumber'] : '';
        $DateCreated = isset($_POST['DateCreated']) ? $_POST['DateCreated'] : '';

        if (empty($ToolCategoryCode) || empty($ToolCategoryName) || empty($ToolShelfNumber) || empty($DateCreated)) {
            echo "<h2>All fields must be filled out.</h2>\n";
        } else {
            $category = new Category($ToolCategoryID, $ToolCategoryCode, $ToolCategoryName, $ToolShelfNumber, $DateCreated);
            $result = $category->saveCategory();
            if ($result) {
                echo "<h2>New Category #$ToolCategoryID successfully added</h2>\n";
                echo "<h2>$category</h2>\n";
            } else {
                echo "<h2>Sorry, there was a problem adding that category</h2>\n";
            }
        }
    }
} else {
    echo "<h2>ToolCategoryID is missing from the request.</h2>\n";
}
?>
