# PHP Basic User Authentication
## Prototype 1
- Create a new file, login_form.php
	- Create an input for username
	- Create an input for password
	- Create a login button that will be used to submit the form
	- Create a JS click handler for the login button
		- calls a function that performs an ajax call
		- url: login_handler.php
		- data: username, password
		- method: post
		- dataType: 'text'
		- success: inform user if they successfully logged in or not
			- Check response for the word "true" or "false"
- Create a new file, login_handler.php
	- Create a nested associative array: $user_info
	- 

		$user_info = [
			['id'=> 0, 'username'=>'dpaschal', 'password' => 'fluffybunnies']
		];

		
	- get the data you received from your login_form.php
	- loop through the array till you find a matching username. 
	- Once you get the correct record, check the password within that record
	- NOTE: any response from login_handler.php will show up in the ajax call's network call in login_form.php
	- If the username and password match:
		- use sessions, save the user's ID into the session variable under "user_id"
			- for example: $_SESSION['user_id']=5;
	- If the username and password DON'T match:
		- print out an error message

## Prototype 2
- In login_handler.php
	- Make a php array called $output
		- give it an element of "success".  Set it to true if login was successful, false if not
		- If successful, give it an element of "user_id".  Set it to the logging in user
		- Give it an element of 'message'.  Put an appropriate login message depending on login result
	- use json_encode() to encode $output into a string, $output_string
	- print $output_string
	- remember: if any other text is printed out alongside the json, the json conversion in the AJAX call will fail.  The only thing printed can be json
- In login_form.php
	- change dataType to 'json'
	- in the success handler, handle the incoming json data to inform the user of success or failure
	
## Prototype 3

- in phpfiddle
	- use sha1 to encrypt your password
	- sha1([YOUR PASSWORD])
	- for example:
		- $encrypted_pass = sha1('fluffybunnies');
		- print($encrypted_pass);
		- // outputs 2beb0192eb1ca5a8756bc89a09b93036e1854049
- in login_handler.php
	- update the password in your $user_info array to use sha1()
	- Validate your user using sha1()
		
		`$user_info = [['id'=> 0, 'username'=>'dpaschal', 'password' => '2beb0192eb1ca5a8756bc89a09b93036e1854049']];`

