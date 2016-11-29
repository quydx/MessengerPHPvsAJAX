// ham gui du lieu 
function Join () {
	$username = $("#username").val() ;
	$password = $("#password").val() ;

	//gui du lieu
	 $.ajax({
	 	url :'join.php',
	 	type :'POST' ,
	 	data : {
	 		username : $username ,
	 		password : $password 
	 	},
	 	success : function ( result) {
	 		$(".alert").html(result) ;
	 		location.reload();
	 	}
	 });
}
		 //bat su kien click 
	$("#formJoin .btn-submit").click(function(){
	 	Join();
	});