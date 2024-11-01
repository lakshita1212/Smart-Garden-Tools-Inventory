<?php
/*
Lakshita Madhavan November 1, 2024 lm66@njit.edu
IT 202 001  || Phase 3 Assignment*/

if (isset($_SESSION['login'])) {
   unset($_SESSION['login']);
}
header("Location: index.php");
?>




