<?php
require_once('database.php');
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
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
