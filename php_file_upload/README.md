# PHP File Upload Prototype
## Prototype 1:
- In uploader_form.php
	- add a file upload field, called "upload_file"
	- add an input text field, name it "description"
	- configure the form to send POST data to file_handler.php
	- add the encoding type to the form:
		- enctype='multipart/form-data'
	- add a submit button
		- type submit
- in file_handler.php
	- print out the values inside:
		- $_FILES
			- note how your file is inside "upload_file"
		- $_POST
- upload an image file.  Make sure it isn't over 2 megs in size

## Prototype 2:
- in file_handler.php
	- see if the directory, 'uploads', exists
	- if it exists, use the pathinfo() function on your upload file's name
	- use the 'extension' element of the array returned by pathinfo() to determine if the file extension is valid:
		- only accept .jpg, .gif, .jpeg, and .png files
	- check the file size from $_FILES to determine if the file is too large or not.
		- getimagesize() is helpful, as is the size from the $_FILES superglobal
		- limit it to 2 megabytes
		- you probably want to use the tmp_name element of the $_FILES superglobal to test the file
	- if the file size is correct, and the extension is correct:
		- use move_uploaded_file() to move the file so it is permanent.
			- you need to move it from the tmp_name to the desired file name
			- put the new file into the uploads directory
### MAKE SURE YOU TEST move_uploaded_file to see if it actually worked.  File permissions can be a problem.

## Prototype 3: 
- in uploader_ajax.php
	- add the same form elements as you added to uploader_form.php
		- make the submit button into type button and add a click handler
	- make an ajax call triggered by the click handler
		- processData: false
		- contentType: false
		- data: should use a new FormData object, targetted to the form in question
	
