<?php
include 'db.php';

if(isset($_POST['submit'])){
		$firstName = $_POST['firstName'];
	  $lastName = $_POST['lastName'];
	  $address = $_POST['addres'];
	  $email = $_POST['email'];
	  $course = $_POST['clas'];
	  $number = $_POST['num'];

//   $enter = "INSERT INTO become (firstName) VALUES ('$firstName')";
//   $enter2 = mysqli_query($config, $enter) or die (mysqli_error());
//   echo 'Success';

$check = "SELECT * FROM become WHERE email = '$email'";
$check2  = mysqli_query($config, $check) or die(mysqli_error());
$count = mysqli_num_rows($check2);

if($count > 0){
	echo "Already registered";
	
}else{
	$enter = "INSERT INTO become (firstName, lastName, addres,email, clas, num) VALUES ('$firstName', '$lastName', '$address','$email', '$clas' $num')";
 
 $enter2 = mysqli_query($config, $enter) or die (mysqli_error());
 echo 'Success';
}

 

}

?>
