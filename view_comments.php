<?php include "model_comments.php"; 

if(!empty($_POST['comment'])){

$sql = "INSERT INTO comments(sender_id, receiver_id, comment)
VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);

$stmt->execute([
$_SESSION['user_id'],
$_POST['receiver'],
$_POST['comment']
]);

}
?>

<h3> User <?= $row['sender_id'] ?> commented:</h3>
<p><?= $row['comment'] ?></p>
<form action="profile.php" method="GET">
        Your reply: <input type="text" name="reply" placeholder="Your reply here"><br>
        <input type="submit" value="Reply to user"><br>
</form>

