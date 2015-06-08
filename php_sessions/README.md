# PHP Sessions

## Prototype 1:
- In session_setter.php, create a form 
	-with 3 different fields
		- name
		- age
		- occupation
	- In the form action, send the data to session_reader.php
- In session_reader.php, 
	- print out the data coming from the form
	- save the form data to the $_SESSION superglobal
- Go back to your session_setter.php. 
	- in the Value for each input, print the appropriate $_SESSION element to remember the previous value

## Prototype 2:
- in session_reader.php, 
	- perform regex checks on the incoming data
	- if any data has an error, 
		- save it to an array inside $_SESSION called "errors"
	- use the header() PHP function to redirect the page back to session_setter.php
		- header('session_setter.php');  
		- make sure that you do not print anything before calling header or it won't work
- in session_setter.php
	- underneath each input, print the corresponding error message IF IT IS SET
