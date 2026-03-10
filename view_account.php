<?php include "model_account.php"; ?>

<h3>Edit your profile here</h3>

<form action="profile.php" method="POST">

    Name: 
    <input type="text" name="realname" value="<?php print($row['realname']); ?>"><br>

    Bio: 
    <input type="text" name="bio" value="<?php print($row['bio']); ?>"><br>

    Salary:
    <input type="text" name="salary" value="<?php print($row['salary']); ?>"><br>

    Password: 
    <input type="password" name="password">

    <input type="submit" name="update_profile" value="Update Profile">

</form>


<h3>Delete your profile</h3>

<form action="profile.php" method="POST">
    <input type="submit" name="delete_profile" value="Delete my profile">
</form>

<!-- ToDo: Visa upp login/registreringsinformation -->