<?php

session_start();

$errors = array();


//Connect to Database
$db = mysqli_connect('localhost', 'root', '', 'useraccounts') or die('could not connect');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];


//check db for repetation
$user_check_query = "SELECT * FROM useraccounts WHERE username = '$username' or email = '$email' LIMIT 1";
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);
if($user){
	if ($user['username'] === $username) {
		array_push($errors, "Username Exists");
	}
	if ($user['email'] === $email) {
		array_push($errors, "This email is already registerd");
	}
}

if(count($errors) == 0){
$query = "INSERT INTO useraccounts (username, lastname, email, password) VALUES ('$username', '$lastname', '$email', '$password')";

	mysqli_query($db,$query);
	header("location: ..\userlogin.php");
}

}



?>
