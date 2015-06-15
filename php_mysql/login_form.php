<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<title></title>
	<script src="final.js"></script>
</head>
<body>
<form action="logout.php">
<input id="user" type="text" name="username">
<input id="pass" type="password" name="password">
<button id="btn" type="button">login</button>
<button id="bt2" type="submit">logout</button>
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
		// add_todo_form();
		
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
					$('#todo').html('User_ID sign in:'+ response);
					add_todo_form();
				}
				else {
					console.log('error: ', response)
					
				}
			}
		});
}
function add_todo_form(){
	$.ajax({
			url: 'form.php',
			method: 'POST',
			dataType: 'text',
			success: function(response){

				console.log(response);
				$('#todo').html(response);
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