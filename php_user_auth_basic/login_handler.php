<?php 

$user_info = [
["username" => 'shibby', "password" => 'test', 'id'=> 0]
];
$output = [];
$user = $_POST['username'];
$pass = $_POST['password'];
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
		}
	}
	else {
		$output['success'] = true;
	};
}

$output_string = json_encode($output);
print($output_string);
?>