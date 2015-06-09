<?php 

$user_info = [
["username" => 'shibby', "password" => 'test', 'id'=> 0]
];
$user = $_POST['username'];
$pass = $_POST['password'];
print_r($user_info);
foreach ($user_info as $key => $value) {
	if ($value['username'] == $user) {
		if ($value['password'] == $pass){
			$_SESSION['user_id']= $value['id'];
			print('user info matches');
		}
		else{
			print('user info does not match');
		session_unset();
		}
	}
	else {
		print('user info does not match');
		session_unset();
	};
}

?>