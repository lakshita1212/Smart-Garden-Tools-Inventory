<?php
/*
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
*/

session_start();
include_once("gardentoolscategory.php");
include_once("gardentoolsproduct.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventory Helper</title>
    <link rel="icon" href="images/faviconit.png" type="image/png">
    <link rel="stylesheet" href="styles.css">


</head>
<body>
    <header>
        <?php include("header.inc.php"); ?>


    </header>
   <section style="height: 425px;">
        <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
        </nav>
        <section id="container">
        <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>

