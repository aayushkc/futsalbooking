<?php 

$db = mysqli_connect('localhost', 'root', '', 'userbookings');
$user_check_query = "SELECT * from users";
$result = mysqli_query($db, $user_check_query);

if (isset($_GET['delete'])) {
		$id = $_GET['delete'];
		$db ->query( "DELETE FROM users where id ='$id' ");
		header('location: ../Futsal/html/admin.php');
}
			


















?>