<?php

// Username är redan lagrat i session
$username = $_SESSION['username'];

print($_SESSION['username']);

// Hämta användardata från databasen
$sql = "SELECT * FROM profiles WHERE username = ?";
$stmt = $conn->prepare($sql); // SQL injection protection
$stmt->execute([$username]);

$row = $stmt->fetch(); // Hämta data

// Store user id i session storage
$_SESSION['user_id'] = $row['id'];



// Updatera profile

if(isset($_POST['update_profile'])){

    $realname = test_input($_POST['realname']);
    $bio = test_input($_POST['bio']);
    $salary = test_input($_POST['salary']);

    $sql = "UPDATE profiles 
            SET realname=?, bio=?, salary=? 
            WHERE id=?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$realname, $bio, $salary, $_SESSION['user_id']]);

    print("Profile updated!");
}



// Delete profile

if(isset($_POST['delete_profile'])){

    $id = $_SESSION['user_id'];

    $sql = "DELETE FROM profiles WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    print("Profile deleted");

    session_destroy();
}