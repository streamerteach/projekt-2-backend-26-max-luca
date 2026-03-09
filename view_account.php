<?php include "model_account.php"; ?>

<h3>Edit your profile here</h3>

<form action="profile.php" method="GET">
    Name: 
    <input type="text" name="realname" value="<?php print($row['realname']); ?>"><br>

    Bio: 
    <input type="text" name="bio" value="<?php print($row['bio']); ?>"><br>

    Password: 
    <input type="password" name="password">

    <input type="submit" value="Update Profile">
</form>

<!-- ToDo: Visa upp login/registreringsinformation -->