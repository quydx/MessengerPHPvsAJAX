<?php
	include 'includes/general.php';
	$query_get_msg = mysqli_query($cn , "SELECT * FROM messages WHERE id_msg > ((SELECT COUNT(*) FROM messages) -50) ORDER BY id_msg ASC ");
	//dung vong while de lay du lieu
	while ($row = mysqli_fetch_assoc($query_get_msg)) {

		if ( $row['user_from'] == $user){
			echo '<div class="msg-user">
					<p> '.$row['user_from'].' :'. $row['body'].'<br> '.$row['date_sent'].'</p> 
				</div>';
		}
		else{
			echo '<div class="msg">
					<p>'.$row['user_from']. ':'. $row['body'].'<br>'.$row['date_sent'].'</p>
				</div>';
		}

	}
?>
