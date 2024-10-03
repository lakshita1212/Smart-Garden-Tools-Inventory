<?php
/*
Lakshita Madhavan October 3, 2024 lm66@njit.edu
IT 202 001  || Phase 1 Assignment*/

function getDB() {
   $host = 'sql1.njit.edu';
   $port = 3306;
   $dbname = 'lm66';
   $username = 'lm66';
   $password = 'SQL20212lm!';
   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
   try {
       $db = new mysqli($host, $username, $password, $dbname, $port);
 error_log( "You are connected to the $host database!");
       return $db;
   } catch (mysqli_sql_exception $e) {
       error_log($e->getMessage(), 0);
       echo $e->getMessage();
   }
}
//getDB();
?>
