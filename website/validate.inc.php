<?php
/*
Lakshita Madhavan November 15, 2024 lm66@njit.edu
IT 202 001  || Phase 4 Assignment
*/

require_once('database.php');
$emailAddress = filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL);
$password = $_POST['password'];

if (!$emailAddress) {
   echo "<h2>Invalid email address. Please try again.</h2>\n";
   echo "<a href=\"index.php\">Return to login</a>\n";
   exit;
}

$query = "SELECT firstName, lastName, pronouns FROM SmartGardeningToolsManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();
$name = "$firstName $lastName $pronouns";
if ($fetched && isset($name)) {
   echo "<h2>Welcome to Inventory Helper, $name </h2>\n";
   $_SESSION['login'] = $name;
   header("Location: index.php");
} else {
   echo "<h2>Sorry, login incorrect. Could not access the Smart Gardening Tools Inventory</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
?>
