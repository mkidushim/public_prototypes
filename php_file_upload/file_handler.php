<?php
// print_r($_FILES);
// print("<br>");
// print_r($_POST);
// print("<br>");
$target_dir = 'uploads/';
$target_file = $target_dir.$_FILES['upload_file']['name'];
$output= [];

if(isset($_FILES['upload_file'])){
	$name = pathinfo($_FILES['upload_file']['name']);
	// print_r($name);
	// print("<br>");
	if($name['extension'] == "jpg" || $name['extension'] == "png" || $name['extension'] == "jpeg" || $name['extension'] == 'gif'){
		print_r("extension:".$name['extension']."<br>");
		print_r("size:".$_FILES['upload_file']['size']."<br>");
		if ($_FILES['upload_file']['size'] > 1 AND $_FILES['upload_file']['size'] < 2000000){
		$temp_name = $name['temp_name'];
		print_r($_FILES['upload_file']['tmp_name']);
		if(move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_file)){
			$output['filepath'] = stripslashes($_FILES['upload_file']['tmp_name']);
			$output['success'] = true;
			$output['success message'] = "file uploaded";
			// print('success');
		};
		}
	}
}
else{
	//print('error');
	$output['success'] = false;
	$output['success message'] = "file not uploaded";
}
?>