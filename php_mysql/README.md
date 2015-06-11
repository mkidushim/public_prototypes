# php mysqli prototype
## Prototype 1
- you should never store your database credentials on github, even if it is private
	- the .gitignore file is set to ignore mysql_connect.php
	- so we create a "config" file called mysql_connect.php.config which has the default dummy values
	- copy the mysql_connect.php.config to mysql_connect.php
	- change the values in mysql_connect.php to your database credentials
		- default xampp mysql username is 'root'
		- default xampp mysql password is '' (nothing)
		- keep in mind that for production environments, using the root account for an application is not a good idea, but sufficient for now

## Prototype 2
- in index_select.php:
	- require your mysql_connect.php file so you have make a mysql connection available to any code below the require
	- make a variable, $query, and put in the "SELECT" query that you made in the mysql_intro Prototype 2
	- using mysqli_query, execute the query.  Make sure to save the return value from mysqli_query into a variable called $result
	- check if the query resulted in any data with mysqli_num_rows().  It needs to know which result to check on!
	- if mysqli_num_rows() tells you that there were rows found, use mysqli_fetch_assoc to get the data, one row at a time
		- you might get any number of rows, find each of them
	- print out each row returned

## Prototype 3
- in index_insert.php:
	- make another require to mysql_connect.php
	- make another $query variable, but this time use your "INSERT" query from mysql_intro Prototype 2
	- instead of mysqli_num_rows(), use mysqli_affected_rows() to detect how many rows are changed by a query
		- mysqli_affected_rows doesn't require the result variable, it always tells you the last update/insert/delete
	- run your index._select.php to see what the new data

## Prototype 4
- create a new page, form.php, 
	- with the necessary fields for your todo item table
		- title
		- details
		- timestamp (allow this in any human form)
		- choose an arbitrary
	- in the form "action", specify your index_insert.php file
	- in the "method", use POST
- in your index_insert.php
	- print out your $_POST variable to ensure you are getting all of your data
	- if you get the data you should have, change your "INSERT" query to take the data from your $_POST variable instead of hard coding
	- assume a user id from your user table
- review your todo item list from index_select.php

## Prototype 5
- copy your login files from the php_user_auth_basic prototype
- in your login_handler.php file
	- instead of accessing the information from an array
		- generate a "SELECT" query to your users table.
			- make sure to encrypt your password if your user table has encrypted passwords
			- if your select returns a row, you know you have a valid user
			- mysqli_fetch_assoc to retrieve the user data
			- save the user's ID into a $_SESSION variable
- create a logout.php file
	- use session_destroy() to remove the logged in user
- in your index_insert.php file
	- read the current user_id from your $_SESSION variable
	- if it isn't set, don't proceed with the mysql statement
		- exit() is a great way to stop php execution prematurely
	- use the user id in your insert statement, rather than the previous hard-coded value


