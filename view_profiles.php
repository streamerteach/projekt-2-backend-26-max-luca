<?php include "model_profiles.php"; ?>

<h2>All profiles</h2>

<?php
foreach($rows as $row){

print("<p>");
print($row['username']);
print(" - ");
print($row['bio']);
print("</p>");
}
?>
<form method="GET">

Sort by salary:

<input type="text" name="salary">

<input type="submit" value="Filter">

</form>

<form method="POST">

<input type="hidden" name="like_user" value="<?php print($row['id']); ?>">

<input type="submit" name="like" value="Like">

</form>