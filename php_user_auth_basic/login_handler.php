<?php 

$user_info = [
["username" => 'shibby', "password" => 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'id'=> 0]
];
$output = [];
$user = $_POST['username'];
$pass = sha1($_POST['password']);
//print_r($user_info);
foreach ($user_info as $key => $value) {
	if ($value['username'] == $user) {
		if ($value['password'] == $pass){
			$_SESSION['user_id']= $value['id'];
			$output['success'] = true;
			$output['user_id'] = $value['id'];
		}
		else{
			$output['success'] = false;
			$output['errors'] = 'invalid password';
		}
	}
	else {
		$output['success'] = false;
		$output['errors'] = 'invalid username and/or password';
	};
}

$output_string = json_encode($output);
print($output_string);
?>