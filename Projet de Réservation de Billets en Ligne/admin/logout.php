<?php require_once('./../bd/conbd.php'); ?>
<?php 
unset($_SESSION['user']);
header(header: "location: ../index.php");
?>