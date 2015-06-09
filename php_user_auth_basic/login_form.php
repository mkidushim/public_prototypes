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
function ajax_call() {
	$.ajax({
			url: 'login_handler.php',
			data: {
				username: $('#user').val(),
				password: $('#pass').val()
			},
			method: "POST",
			dataType: 'text',
			success: function(response){
				window.global_result = response;
				if(response){
					console.log('result is true',response)
				}
				else if (response == false){
					console.log(response)
				}
			}
		});
}
$(document).ready(function(){

	$('form').on('click','#btn', function(){
		console.log('btn works')
		ajax_call();
		
	})

})
	</script>
</html>