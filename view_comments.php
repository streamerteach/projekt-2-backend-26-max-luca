<?php include "model_comments.php"; 

// Kontrollera om ett kommentarsfält har skickats
if(!empty($_POST['comment'])){

// SQL query för att spara en kommentar i databasen
$sql = "INSERT INTO comments(sender_id, receiver_id, comment)
VALUES (?, ?, ?)";

// Förbered SQL query
$stmt = $conn->prepare($sql);

// Skicka värden till databasen
$stmt->execute([
$_SESSION['user_id'],
$_POST['receiver'],
$_POST['comment']
]);

}
?>

<!-- Visar vem som skickade kommentaren -->
<h3> User <?= $row['sender_id'] ?> commented:</h3>

<!-- Visar kommentaren -->
<p><?= $row['comment'] ?></p>

<!-- Formulär för att svara på kommentaren -->
<form action="profile.php" method="GET">
        Your reply: <input type="text" name="reply" placeholder="Your reply here"><br>
        <input type="submit" value="Reply to user"><br>
</form>

