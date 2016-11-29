<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=divice-width" , initial-scale=1.0 , user-scalable=no , minimum-scale=1.0 , maximum-scale = 1.0>
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Messenger</title>
</head>
<body>

<?php
	if($user){
		echo '<div class="main-menu">
				<h1><i class="fa fa-commenting"></i> Messenger</h1>
				<a href="logout.php"><i class="fa fa-sign-out"></i></a>
				<div class="clearfix"></div>
			</div>';
	}
	else {
		echo '<div class="main-navbar">
				<h1><i class="fa fa-commenting"></i> Messenger</h1>
			</div>';
	}
?>
