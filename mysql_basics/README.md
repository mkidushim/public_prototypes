# MYSQL basics
## Prototype 1
### do all of this in phpmyadmin
#### make sure to check your database's contents between each operation
#### put all answer SQL statements into mysql_queries.sql
- using 'SELECT', find 1 user from your user table by username
	- for example: "SELECT * FROM `users` WHERE `username`='Juan'"
- using 'UPDATE', change one user's email from your user table.  Update only the user that you had previously selected above
	- for example: "UPDATE `users` SET `email`='myawesomeemail' WHERE `username`='Juan'"
- using 'INSERT', add one new user to your user table
	- for example: "INSERT INTO `users` SET `username`='Mandy', `email`='greatemail@email.com', `password`=sha1('thisisagreatpassword')"
- using 'DELETE', delete the user you just create
	- for example: "DELETE FROM `users` WHERE `username`='Mandy'"

## Prototype 2
- Create a table, todo_items, with the following fields:
	- id: int 11
	- title: varchar 50
	- details: varchar 500
	- timestamp: int 11
	- user_id: int 11
- inside todo_items manually in phpmyadmin
	- create 10 todo items
- inside todo_items
	- select all todo_items made by 1 user of your choice
	- insert a new todo item into the table by that same user
	- delete a todo item by that user
	- update a todo item by that user with data of your choice
- perform a select to get all information from `users` by using the user's id

