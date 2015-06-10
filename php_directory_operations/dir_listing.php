	<?php
session_start();
$img = glob("images/*");
$output['success'] = false;
if (isset($img)) {
	$output['success']= true;
	$output['files'] = $img;

}
else {
	$output['success']= false;
	$output['errors'] = 'images not available';
}
$output_string = json_encode($output);
print_r($output_string);
?>