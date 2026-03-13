<?php
// Like handler!
if(isset($_POST['like_user'])){

$sql = "UPDATE profiles SET likes = likes + 1 WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_POST['like_user']]);

}

$sql = "SELECT * FROM profiles";
$stmt = $conn->query($sql);
$rows = $stmt->fetchAll();
// ToDo: Kör SQL kod på databasen
// Execute the SQL query
$result = $conn->query($sql);
// Fetch a row
$row = $result->fetch();
// Skriv ut raden
//print_r($row);
// Printa ut ett värde från associativa arrayen
//print($row['realname']);
?>