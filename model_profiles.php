<?php
// Like handler!
// Kontrollera om like knappen har tryckts
if(isset($_POST['like_user'])){

// SQL query som ökar likes med +1
$sql = "UPDATE profiles SET likes = likes + 1 WHERE id=?";
$stmt = $conn->prepare($sql);

// Skicka id för användaren som fick en like
$stmt->execute([$_POST['like_user']]);

}

// Hämta alla profiler från databasen
$sql = "SELECT * FROM profiles";
$stmt = $conn->query($sql);

// Hämta alla rader och lagra i array
$rows = $stmt->fetchAll();

$result = $conn->query($sql);
// Fetch
$row = $result->fetch();
// Skriv ut raden
//print_r($row);
// Printa ut ett värde från associativa arrayen
//print($row['realname']);
?>