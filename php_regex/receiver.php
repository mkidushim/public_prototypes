<?php
$name = $_POST['first_name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$age = $_POST['age'];

print($name);
print('<br/>');
print($age);
print('<br/>');
print($username);
print('<br/>');
print($phone);
print('<br/>');
foreach ($_POST as $key => $value) {
	//print("$key: " .  "$value");
	print('<br/>');
switch ($key) {
	case 'first_name':
		if(preg_match('/^[a-zA-Z]{2,}$/', $_POST['first_name']) != 1){
			print('first name incorrect');
			print('<br/>');
			break;
			
		}
		print("checking first_name : $_POST[first_name]");
		print('<br/>');
		break;
	case 'username':
	if(preg_match('/^[A-Za-z]+[A-Za-z0-9]{8,}$/', $_POST['username']) != 1){
		print('username cannot be used');
		break;
	}
			print("checking username : $_POST[username]");
			print('<br/>');
			break;
	case 'phone':
		if(preg_match('/^[0-9]{3}[0-9]{3}[0-9]{4}$/', $_POST['phone']) != 1){
			print('incorrect phone input');
			break;
			}
			print("checking phone : $_POST[phone]");
			print('<br/>');
			break;
	case 'age':
		if(preg_match('/^[0-9]{1,3}$/', $_POST['age']) != 1){
			print('age incorrect');
			print('<br/>');
			break;
			}
			print("checking age : $_POST[age]");
			print('<br/>');
			break;
			
	case 'bonus':
		if(preg_match('/^d{3}$/', $_POST['bonus']) != 1){
			print('BONUS incorrect');
			print('<br/>');
			break;
			}
			print("checking bonus : $_POST[bonus]");
			print('<br/>');
			break;
	default:
			# code...
			break;
	}
}
?>