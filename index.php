<?php
include "handy_methods.php";

if(isset($_SESSION['username'])){
    header("Location: profile.php");
}
else{
    header("Location: login.php");
}
exit();
?>