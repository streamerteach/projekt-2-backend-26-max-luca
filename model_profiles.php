<?php
$sql = "SELECT * FROM profiles";
// ToDo: Kör SQL kod på databasen
// Execute the SQL query
$result = $conn->query($sql);
// Fetch a row
$row = $result->fetch();
// Skriv ut raden
print_r($row);
// Printa ut ett värde från associativa arrayen
print($row['realname']);
?>