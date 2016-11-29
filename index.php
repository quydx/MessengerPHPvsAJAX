<meta charset="utf-8">
<?php
 include 'includes/general.php'; 
 include 'includes/header.php';
 
if(!$user){
	 echo '<div class="box-join">
				<p>Đăng ký tài khoản hoặc đăng nhập</p>
				<form method="post" id="formJoin" onsubmit="return false;">
					<input type="text" placeholder="Tên đăng nhập" class="data-input" id="username">
					<input type="password" placeholder="Mật khẩu" class="data-input" id="password">
					<button class="btn-submit">Bắt đầu</button>
					<div class="alert danger"></div>
				</form>
			</div>' ; 
	}
else {
 echo '<div class="main-chat">
		 </div>
		 <div class="box-chat">
		 	<form method="POST" id="formSendMsg" onsubmit="return false ;">
		 		<input type="text" placeholder="Nhap noi dung tin nhan">
		 	</form>
		 </div>';
}



 include 'includes/footer.php';
?>
