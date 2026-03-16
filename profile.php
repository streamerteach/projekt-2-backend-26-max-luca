<?php 
include "handy_methods.php";

// Kontrollera om användaren är inloggad, annars skickas den till login sidan
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dating site</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="container">
        <?php include "header.php" ?>
        <section>
            <article>
                <h2>This is your profile page </h2>
                <?php include "./view_account.php" ?>
</article>

<?php include "view_profiles.php" ?>

</body>
</html>