<?php

/*
Lakshita Madhavan November 26, 2024 lm66@njit.edu
IT 202 001  || Phase 5 Assignment
*/


include("gardentoolscategory.php");
include("gardentoolsproduct.php");

$totalCategories = Category::getTotalCategories();
$totalItems = Item::getTotalItems();
$listpricetotal = Item::getTotalListPrice();
$wholesalepricetotal = Item::getTotalWholesalePrice(); 

$doc = new DOMDocument("1.0");
$inventory = $doc->createElement("inventory");
$inventory = $doc->appendChild($inventory);

$categories = $doc->createElement("categories", $totalCategories);
$categories = $inventory->appendChild($categories);

$items = $doc->createElement("items", $totalItems);
$items = $inventory->appendChild($items);

$listprice = $doc->createElement("listpricetotal", $listpricetotal);
$listprice = $inventory->appendChild($listprice);

$wholesaleprice = $doc->createElement("wholesalepricetotal", $wholesalepricetotal);
$wholesaleprice = $inventory->appendChild($wholesaleprice);

$output = $doc->saveXML();
header("Content-type: application/xml");
echo $output;
?>