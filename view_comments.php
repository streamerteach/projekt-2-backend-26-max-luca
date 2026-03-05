<?php include "model_comments.php"; ?>

<h3> User <?= $row[`username`] ?> commented:</h3>
<p><?= $row[`bio`] ?></p>
<form action="profile.php" method="GET">
        Your reply: <input type="text" name="reply" placeholder="Your reply here"><br>
        <input type="submit" value="Reply to user"><br>
</form>