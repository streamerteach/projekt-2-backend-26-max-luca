<?php
// Task: Fetch "karlssoj" as comment sender
// Task2: Fetch karlssojs bio as the comment "Hello"

$userid = $_SESSION['user_id'];
//Fetch data from database
 $sql = "SELECT sender_id comment, reciver_id, username FROM profiles INNER JOIN comments ON profiles.id = comments.sender_id";
 $stmt = $conn->prepare($sql); 
 $stmt ->execute();
 $row = $stmt->fetch(); 
 // print_r($row);
