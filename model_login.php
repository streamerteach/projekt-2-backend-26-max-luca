<?php

//registrering: Hasha lösenordet och spara i databasen
$hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
//ToDo: Spara $hashed_password i databasen





print ("<p>Hashed password stored in DB: " . $hashed_password . "</p>");


//Hantera login/registrerings reuqesten
if (!empty($_REQUEST['password'])) {
}
//Verify login
$verifying_password = password_verify($password, $hashed_password);

//Envägstunktion = algoritm
$hashed_password = hash("sha256", $password);
print("Hashed password stored in DB: " . $hashed_password . "</p>");


print ("<p><b>Max hashbar<b></p>");
$password = "test";