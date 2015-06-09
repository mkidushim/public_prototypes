#php directory operations
## Prototype 1
- in index.php
	- make a div to hold all the photos, with an ID of 'image_container'
	- use the glob() PHP function to get a directory listing images
		- Look it up!
		- for glob()'s argument, use * as the wildcard character to select all files
		- make sure it is looking inside the images directory
	- use the values returned by glob() to create images in the 'image_container' div
		- set the src = to the file value returned by glob()
		- one image per value returned

## Prototype 2
- in dir_listing.php
	- use the same glob() code as above, however:
		- make an associative array, output:
			- success: operation is successful or not
			- error: any errors that might have occured
			- files: an array of files from the images directory
		- json_encode the output variable
		- print the encoded variable
- make carousel.php
	- make a function: load_files()
		- make an ajax call to dir_listing.php to get the list of files
		- for each file given from dir_listing.php, use jquery to create an image for each file
			- keep an array of each image made, image_array
			- add a variable to keep track of which image is currently being displayed
	- make a button, previous, that calls the function prev_image()
	- make a button, next, that calls the function next_image()
	- put the previous and next button somewhere where you can click on them, around the image.
	-create the prev_image and next_image functions.  
		- if next_image is clicked, display the next photo in image_array
		- if prev_image is clicked, display the previous photo in image_array