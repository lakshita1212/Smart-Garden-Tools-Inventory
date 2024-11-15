<?php
/*
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
*/

include_once("gardentoolscategory.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ToolCategoryID = filter_input(INPUT_POST, 'ToolCategoryID', FILTER_VALIDATE_INT);

    if ($ToolCategoryID === null || $ToolCategoryID === false || !is_int($ToolCategoryID)) {
        echo "<h2>Sorry error - Invalid Category ID.</h2>\n";
        echo "<a href=\"index.php?content=addcategoryform\">Return to Add Category Form</a>\n";
        exit();
    }

    $ToolCategoryCode = filter_input(INPUT_POST, 'ToolCategoryCode', FILTER_SANITIZE_STRING);
    $ToolCategoryName = filter_input(INPUT_POST, 'ToolCategoryName', FILTER_SANITIZE_STRING);
    $ToolShelfNumber = filter_input(INPUT_POST, 'ToolShelfNumber', FILTER_SANITIZE_STRING);
    $DateCreated = filter_input(INPUT_POST, 'DateCreated', FILTER_SANITIZE_STRING);

    if (empty($ToolCategoryCode) || empty($ToolCategoryName) || empty($ToolShelfNumber) || empty($DateCreated)) {
        echo "<h2>All fields must be filled out.</h2>\n";
        echo "<a href=\"index.php?content=addcategoryform\">Return to Add Category Form</a>\n";
        exit();
    }

    $category = new Category($ToolCategoryID, $ToolCategoryCode, $ToolCategoryName, $ToolShelfNumber, $DateCreated);
    $result = $category->saveCategory();

    if ($result) {
        echo "<h2>New Category Successfully Added</h2>\n";
        echo "<table border='1' cellpadding='10'>\n";
        echo "<tr><th>Category Number</th><td>" . htmlspecialchars($ToolCategoryID) . "</td></tr>\n";
        echo "<tr><th>Category Code</th><td>" . htmlspecialchars($ToolCategoryCode) . "</td></tr>\n";
        echo "<tr><th>Category Name</th><td>" . htmlspecialchars($ToolCategoryName) . "</td></tr>\n";
        echo "<tr><th>Shelf Number</th><td>" . htmlspecialchars($ToolShelfNumber) . "</td></tr>\n";
        echo "<tr><th>Date Created</th><td>" . htmlspecialchars($DateCreated) . "</td></tr>\n";
        echo "</table>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that category.</h2>\n";
        echo "<a href=\"index.php?content=addcategoryform\">Return to Add Category Form</a>\n";
        exit();
    }
} else {
    echo "<h2>ToolCategoryID is missing from the request.</h2>\n";
    echo "<a href=\"index.php?content=addcategoryform\">Return to Add Category Form</a>\n";
}
?>
