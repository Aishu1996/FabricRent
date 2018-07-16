<?php

	include ('./connection.php');

	$username = $_POST['username'];

	$password = $_POST['password'];

	$phone = $_POST['phone'];

	$email = $_POST['email'];


	$pass = md5($password);

	$sql = "INSERT INTO users(username, password, phn, email) VALUES('$username','$pass','$phone','$email')";

	$query = mysqli_query($connect, $sql);

	if(!$query){
		echo "Failed to register! Please try again";
	}else{
		echo "alert('Your account is created. Kindly login to continue!')";
		header("Location: ./log.php");
	}


?>