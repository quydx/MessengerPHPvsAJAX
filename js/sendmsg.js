//Ham gui tin nhan
function sendMsg() {
	$body_msg = $('#formSendMsg input[type="text"]').val();
	// alert($body_msg);
	$.ajax({
		url : 'sendmsg.php', // duong dan file xu ly
		type : 'POST',
		data :{
			body_msg : $body_msg 
		},
		success : function(){
			$('#formSendMsg input[type="text"]').val('');
		}
	});
}
// bat su kien go phim enter
$('#formSendMsg input[type="text"]').keyup(function(e){
	if(e.keyCode == '13'){
		sendMsg(); 
		// alert("ban vua an phim enter");
	}
});
//bat su kien click vao input 
$('#formSendMsg input[type="text"]').click(function(){
	window.scrollBy(0, $(document).height());
})