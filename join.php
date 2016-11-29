<?php
	include 'includes/general.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query_check_exist_user = mysqli_query($cn , "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
//
	if( mysqli_num_rows($query_check_exist_user) == 0) {
		$query_check_user = mysqli_query($cn , "SELECT * FROM users WHERE username = '$username'");
		if (mysqli_num_rows($query_check_user) > 0) {
			echo "<script> alert('Sai mật khẩu') ;</script>";
		}
		else{
			$query_register = mysqli_query($cn, "INSERT INTO users VALUES('', '$username','$password','')");
			echo " <script> alert('Đăng ký thành công tài khoản" .$username." , hãy đăng nhập'); </script> ";
		}
	}
	else {
		$_SESSION['username']= $username ;
		echo " <script> alert('Đăng nhập thành công'); </script> ";
	}
 ?>
