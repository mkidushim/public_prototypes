## Prototype 1:
- In receiver.php
	- write a PHP statement to print out the $_POST data coming from sender.php

## Prototype 2:
- In receiver.php
	- write a PHP statement to loop through the $_POST data coming from sender.php
		- For a for loop, count([variable]) will tell you the length of an array
		- if you use a foreach loop, information can be found here:
			- http://php.net/manual/en/control-structures.foreach.php
	- on a separate line (in the browser output), print out each element key/value in $_POST
		- For example: 
		```
		<pre>
			first_name : John
			age: 32
			phone: 555-555-5555
		</pre>
		```
## Prototype 3:
- In receiver.php, in the loop
	- create a switch statement based on the key of the $_POST array
	- make a different case for each validation
		- For example:
		```
		<pre>
			case first_name
				print("checking first_name : $_POST[first_name]);
				//note that I didn't use quotes on the array key when used inside double quotes
				break;
		</pre>
		```
	- inside your case statements, use preg_match to determine if the value matches an appropriate RegEx
		- for example:
		```
		<pre>
			if(preg_match( '/^[a-zA-Z0-9{2,}$/' , $_POST['first_name']) != 1)
			{
				//the text didn't match the given criteria, print an error message, add to an error array, or whatever you deem appropriate
			}
		</pre>
		```
	- match the following conditions:
		- first_name: at least 2 characters of any time
		- age: no more than 3 numbers
		- phone: standard US phone number with these variations:
		Examples:
			- (###) ###-####
			- ### ### ####
			- ###-###-####
			- 1### ### ####
		- username: 
			- must start with a letter
			- must have at least 6 characters total
			- only characters and numbers (no special characters)
		- bonus (extra challenge!):
			- find if it has 3 consecutive numbers anywhere within the contents


