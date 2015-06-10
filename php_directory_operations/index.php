

<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript">


function load_files (){
$.ajax({
            url: 'dir_listing.php',
            dataType: 'text',
            method: 'GET',
            cache: false,
            success: function(response) {
            	console.log(response);
            }
        });
}
</script>
</head>
<body>
<div id='img_container'>
	<?php
$img = glob("images/*.jpg");
$output = [];
foreach ($img as $key => $value) {
	print("<img src=".$img[$key].">". "<br>");
}
?>
	
</div>
</body>
</html>
