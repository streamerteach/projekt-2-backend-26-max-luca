<?php

//registrering: Hasha lösenordet och spara i databasen
$hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
//ToDo: Spara $hashed_password i databasen
$sql = "INSERT INTO profiles 
(id, username, realname, passhash, zipcode, bio, salary, preference, email, likes, role)
VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
//Prepare the SQL query template
$stmt = $conn->prepare($sql);
// Execute with values
$stmt->execute(['ullbergm', 'Max', $hashed_password, '12345', 'Hej', '100', '2', 'ullbergm@arcada.fi', '100', '1']);
print("Skapa ny användare!");
print ("<p>Hashed password stored in DB: " . $hashed_password . "</p>");


// Loginrequest: Verifiera inmatat lösenord med has från DB
if (!empty($_REQUEST['password'])) {
 //ToDo: Hämta hashen från databasen
 $sql = "SELECT passhash FROM profiles WHERE username = ?";
 $result = $conn->prepare($sql);
 $row = $result->execute([$username]);
 $row = $result->fetch();
 //Hämta passhash från assaciotaive arrayn
 $hash_from_DB = $row['passhash'];

//Verify login
if (password_verify($_REQUEST['password'], $hash_from_DB)) {
    print ("<p>Password matches hash from DB, Logging in...</p>");
    // Lagra användarnamn i sessionsvariabel
    $_SESSION['username'] = test_input($_REQUEST['username']);
    } 
    else {
    print ("<p>Password does not match hash from DB, Try again...</p>");
    }


if(isset($_POST['register'])){

$username = test_input($_POST['username']);
$realname = test_input($_POST['realname']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO profiles(username, realname, passhash)
VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->execute([$username, $realname, $password]);

print("User registered!");
}
}

