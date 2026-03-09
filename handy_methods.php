<?php
// Start the session
session_start();

// Allt möjligt viktigt som vi använder ofta, sessionshantering, form validation etc.

// En funktion som tar bort whitespace, backslashes (escape char) och gör om < till html safe motsv.
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Databaskonfiguration
$servername = "localhost";
$dbname = "ullbergm";
$username = "ullbergm";

include "hemlis.php";

// hemlis.php ser ut såhär:
// <?php $password = "sup3rh3mlis";

// Vi skapar en instans av PDO klassen som vi kallar $conn
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
print("Connected to database");

?>