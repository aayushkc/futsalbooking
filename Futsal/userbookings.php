<?php

session_start();

$errors = array();


//Connect to Database
$db = mysqli_connect('localhost', 'root', '', 'userbookings') or die('could not connect');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phonenum = $_POST['phonenum'];
	$time = $_POST['time'];
	$endtime = $_POST['endtime'];
	$date = $_POST['date'];
	$futsalname = $_POST['futsalname'];

//check for already booked
	$user_check_query = "SELECT * FROM users WHERE time = '$time' or endtime = '$endtime' or date = '$date' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	if ($row = mysqli_fetch_assoc($result)) {
		if ($row['time'] === $time) {
			if($row['endtime'] === $endtime){
				if($row['date'] === $date){

					array_push($errors, "This email is already registerd");
		}

		}
		}
		
	}



if(count($errors) == 0){
$query = "INSERT INTO users (name, lastname, email, phonenum, time, endtime, date, futsalname) VALUES ('$username', '$lastname', '$email', '$phonenum', '$time', '$endtime', '$date', '$futsalname')";

	mysqli_query($db,$query);
	header("location: ..\html\shankhamulfutsal.php");
}

}



?>
