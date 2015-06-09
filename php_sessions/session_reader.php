<?php
header('location: session_setter.php');
session_start();
print_r($_POST);
$_SESSION = $_POST;
print_r($_SESSION);
$_SESSION['errors']= [];


foreach ($_SESSION as $key => $value) {
	switch ($key) {
		case 'name':
			if(preg_match('/^[a-zA-Z]{2,}$/', $_SESSION['name']) != 1){
				print('error input name wrong');
				array_push($_SESSION['errors'], 'error input name wrong');
				//print($_SESSION['errors']);
			}
			break;
		
		case 'age':
			if(preg_match('/^[0-9]{1,3}$/', $_SESSION['age']) != 1){
				print('error input age wrong');
				array_push($_SESSION['errors'], 'error input age wrong');
				//print($_SESSION['errors']);
				break;
			}
			break;

		case 'occupation':
			if(preg_match('/^[a-zA-Z]{2,}$/', $_SESSION['occupation']) != 1){
				print('error input occupation wrong');
				$_input = 'error input occupation wrong';
				array_push($_SESSION["errors"], 'error input occupation wrong');
				//print($_SESSION['errors']);
				break;
			}
			break;


		default:
			# code...
			break;
	}
}
?>