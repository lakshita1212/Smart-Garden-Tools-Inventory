<?php
/*
Lakshita Madhavan October 3, 2024
IT 202 001  || Phase 1 Assignment*/


if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}
header("Location: index.php");
?>




