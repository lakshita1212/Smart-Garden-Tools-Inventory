<?php
/*
Lakshita Madhavan November 26, 2024 lm66@njit.edu
IT 202 001  || Phase 5 Assignment
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

    <script language="javascript" type="text/javascript">
   function getRealTime() {
       var domcategories = document.getElementById("categorycount");
       var domitems = document.getElementById("itemcount");
       var domwholesalepricetotal = document.getElementById("wholesalepricetotal");
       var domlistpricetotal = document.getElementById("listpricetotal");
       
       var request = new XMLHttpRequest();
       request.open("GET", "realtime.php", true);
       request.onreadystatechange = function() {
           if (request.readyState == 4 && request.status == 200) {
               var xmldoc = request.responseXML;
               var xmlcategories = xmldoc.getElementsByTagName("categories")[0];
               var categories = xmlcategories.childNodes[0].nodeValue;
               var xmlitems = xmldoc.getElementsByTagName("items")[0];
               var items = xmlitems.childNodes[0].nodeValue;
               var xmlwholesalepricetotal = xmldoc.getElementsByTagName("wholesalepricetotal")[0];
               var wholesalepricetotal = xmlwholesalepricetotal.childNodes[0].nodeValue;
               var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
               var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;
               
               domcategories.innerHTML = categories;
               domitems.innerHTML = items;
               domwholesalepricetotal.innerHTML = '$' + parseFloat(wholesalepricetotal).toFixed(2);
               domlistpricetotal.innerHTML = '$' + parseFloat(listpricetotal).toFixed(2);
           }
       };
       request.send();
   }

   getRealTime();

   setInterval(getRealTime, 60000);
</script>



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

       <aside>
           <?php include("aside.inc.php"); ?>
           <script language="javascript" type="text/javascript" )>
               getRealTime();
               setInterval(getRealTime, 5000);
           </script>
       </aside>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>

