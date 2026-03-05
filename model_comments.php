<?php
// Task: Fetch "karlssoj" as comment sender
// Task2: Fetch karlssojs bio as the comment "Hello"

//Hämta användardata från databasen
 $sql = "SELECT * FROM profiles WHERE username = ?";
 $stmt = $conn->prepare($sql); //SQL injection protection
 $stmt ->execute([$username]); //Klistra in bobby tables i förberedda C-koden
 $row = $result->fetch(); // Hämta PDOStatementens data och lagra i en PHP variabel
 // print_r($row);