<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<title></title>
	
</head>
<body>
<form>
<input id="user" type="text" name="username">
<input id="pass" type="password" name="password">
<button id="btn" type="button">login</button>
</form>
</body>
<script type="text/javascript">
$(document).ready(function(){

	$('form').on('click','#btn', function(){
		console.log('btn works')
		ajax_call();
		
	})

})
function ajax_call() {
	$.ajax({
			url: 'login_handler.php',
			data: {
				username: $('#user').val(),
				password: $('#pass').val()
			},
			method: "POST",
			dataType: 'JSON',
			success: function(response){
				window.global_result = response;
				if(response.success == true){
					console.log('result is true',response)
				}
				else if (response.success == false){
					console.log(response)
				}
			}
		});
}
	</script>
</html>