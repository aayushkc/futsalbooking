<?php
session_start();
require_once('config.php');

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM useraccounts WHERE email = ? AND password = ? LIMIT 1";
$stmtselect = $db->prepare($sql);
$result = $stmtselect->execute([$username, $password]);

if($result){
	$user = $stmtselect->fetch(PDO::FETCH_ASSOC);
	if ($stmtselect->rowCount() > 0 AND $user['usertype'] == 'user'){
		$_SESSION['userlogin'] = $user;
		echo "User loged in";
	}elseif ($stmtselect->rowCount() > 0 AND $user['usertype'] == 'admin') {
		echo "Admin loged in";
	}
}else{
	echo "Fail";
}