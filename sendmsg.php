<?php
	include 'includes/general.php'; // file ket noi database
	// khai bao bien , nhan gia tri data tu ajax
	$body_msg = @mysqli_real_escape_string($cn , $_POST['body_msg']);
	//xu ly
	// $body_msg = htmlentities($body_msg);
	// $body_msg = trim($body_msg);
	// neu $body_msg khac rong
	if ( $body_msg != ''){
		$query_send_msg = mysqli_query($cn , "INSERT INTO messages VALUES ('', '$body_msg', '$user', '$date_current')");	
	}
?>