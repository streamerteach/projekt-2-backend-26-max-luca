<?php
//Username är ju redan lagrat i session när man är inloggad!
print ($_SESSION['username']);
//Hämta användardata från databasen
 $sql = "SELECT * FROM profiles WHERE username = ?";
 $stmt = $conn->prepare($sql); //SQL injection protection
 $stmt ->execute([$username]); //Klistra in bobby tables i förberedda C-koden
 $row = $result->fetch(); // Hämta PDOStatementens data och lagra i en PHP variabel
 // print_r($row);
 
 // Store user id in ssession storage for later usage
 $_SESSION['user_id'] = $row['id'];
