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
<button id="btn" type="buton">login</button>
<button id="btn2" type="buton">logout</button>
</form>
<div id="todo">
	
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
	$('form').on('click','#btn2', function(){
		ajax_logout();
	})
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
			method: 'POST',
			dataType: 'JSON',
			success: function(response){
				console.log(response);
				if(response){
					console.log('result is true',response)
					console.log(response)
					$('#todo').html('User_ID sign in:', response);
				}
				else {
					console.log('error: ', response)
					
				}
			}
		});
}
function ajax_logout() {
	$.ajax({
			url: 'logout.php',
			method: 'POST',
			dataType: 'JSON',
			success: function(response){
				console.log(response);
				if(response){
					console.log('result is true',response)
					console.log(response)
				}
				else {
					console.log('error: ', response)
					
				}
			}
		});
}

	</script>
</html>