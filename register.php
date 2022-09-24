<?php

session_start();
if(!$_SESSION['userName'] &&!$_SESSION['userPass']){
	
	header("location: profile.php");
	
}
?>

<html>
<head>
	<title>Registration</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	  // `password`, `address`, `filename`
	$userName = mysqli_real_escape_string($mysqli, $_POST['userName']);
    $userEmail = mysqli_real_escape_string($mysqli, $_POST['userEmail']);
	$userPhone = mysqli_real_escape_string($mysqli, $_POST['userPhone']);
    $userPass = mysqli_real_escape_string($mysqli, $_POST['userPass']);
    $userAddress = mysqli_real_escape_string($mysqli, $_POST['userAddress']);
    $userPhoto = mysqli_real_escape_string($mysqli, $_POST['userPhoto']);

        $result = mysqli_query($mysqli, "INSERT INTO users(id,name,email,phone,password,address,filename) VALUES('?','$userName','$userEmail','$userPhone','$userPass','$userAddress','$userPhoto')");

}
?>
</body>

</html>