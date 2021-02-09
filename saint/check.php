<?php
include 'db.php';

$check = "SELECT * FROM become";
$check2  = mysqli_query($config, $check) or die(mysqli_error());
$dd = mysqli_fetch_array($check2);

$d = print_r($_POST['subject']); 


?>