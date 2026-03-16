<?php include "model_profiles.php"; ?>

<h2>All profiles</h2>

<?php
// Loopar igenom alla profiler som hämtats från databasen
foreach($rows as $row){

// Skapar ett profilkort för varje användare
print("<div class='profile-card'>");

// Visar användarnamn och antal likes
print("<div>");
print($row['username']);
print(" - ");
print("(" . $row['likes'] . " likes)");
print("</div>");
?>

<!-- Formulär för att gilla en profil -->
<form method="POST">

<!-- Skickar id på användaren som får en like -->
<input type="hidden" name="like_user" value="<?php print($row['id']); ?>">

<!-- Likea -->
<input type="submit" name="like" value="Like">

</form>

<?php
// Stänger profilkortet
print("</div>");
}
?>

<!-- Formulär för att filtrera profiler baserat på salary -->
<form method="GET">

Sort by salary:

<input type="text" name="salary">

<input type="submit" value="Filter">

</form>