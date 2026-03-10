<?php

if(!empty($_REQUEST['username'])){
$username = test_input($_REQUEST['username']);
}

//registrering: Hasha lösenordet och spara i databasen
if(isset($_POST['register'])){

//registrering: Hasha lösenordet och spara i databasen
$hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO profiles 
(id, username, realname, passhash, zipcode, bio, salary, preference, email, likes, role)
VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->execute([$_POST['username'], $_POST['realname'], $hashed_password, '12345', 'Hej', '100', '2', $_POST['username'].'@test.com', '0', '1']);
print_r($stmt->errorInfo());

print("Skapa ny användare!");
print ("<p>Hashed password stored in DB: " . $hashed_password . "</p>");

header("Location: login.php");
exit();

}


// Loginrequest: Verifiera inmatat lösenord med has från DB
if (!empty($_REQUEST['password']) && isset($_POST['login'])) {
 //ToDo: Hämta hashen från databasen
 $sql = "SELECT passhash FROM profiles WHERE username = ?";
 $result = $conn->prepare($sql);
 $result->execute([$username]);
 $row = $result->fetch();
 //Hämta passhash från assaciotaive arrayn
 $hash_from_DB = $row ? $row['passhash'] : null;

//Verify login
if ($row && password_verify($_REQUEST['password'], $hash_from_DB)) {
    print ("<p>Password matches hash from DB, Logging in...</p>");
    // Lagra användarnamn i sessionsvariabel
    $_SESSION['username'] = test_input($_REQUEST['username']);
    header("Location: profile.php");
    exit();
    } 
    else {
    print ("<p>Password does not match hash from DB, Try again...</p>");
    }
}