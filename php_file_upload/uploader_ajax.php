<!doctype html>
<html>
<head>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('form').submit(function(e){

		$.ajax({
			processData: false,
			contentType: false,
			data: new FormData(this),
			type: "POST",
			dataType: "json",
			url: 'file_handler.php',
			success: function(response) {
				console.log(response);
				$('uploaded_img').html(response);
			}
		})
		e.preventDefault();
	})

})

	
</script>
<body>
	<form id="file_upload" enctype='multipart/form-data'>
		<input type="file" name="upload_file">
		<input type="text" name="description">
		<button id="btn" name="submit">Submit</button>
	</form>
	<div class="uploaded_img"></div>
</body>
</html>