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
	- create the prev_image and next_image functions.  
		- if next_image is clicked, display the next photo in image_array
		- if prev_image is clicked, display the previous photo in image_array

## Prototype 3 (extra credit)
- in carousel.php
	- put all images into a container, "image_container"
		- make that container the size of the images (800x600 in this case)
	- stack the images on top of each other with position, top, and left styles 
	- make a function, initialize()
		- move every image, except the first, to the right side of the container (probably using left: 100%)
	- make a global variable, current_image_index, set it to 0
	- in your prev_image function:
		- animate the current image out of the image_container
		- decrement the current image counter
		- animate the new current image into the image_container
	- in your next_image function:
		- do the same thing as prev_image, but in the opposite direction
	- go back to your prev_image and next_image function, and test if the NEW current_image would be out of bounds and either:
		- prevent the animation from triggering again (cannot go past the bounds)
		- or make the new index "wrap" around.  So -1 becomes image_array.length-1, image_array.length becomes 0

## Prototype 4 (extra credit)
- in carousel.php
	- for each image created, also create a "dot" somewhere on the page to serve as an indicator
	- make a class, "dot", which causes the element to look like a dot that is unselected
	- make a class, "active_dot", which causes the element to look like a selected dot
	- in your next_image / prev_image functions:
		- find the current active_dot, and remove the class
		- find the new current dot, and give it a class of active_dot
		- using the current_image index should enable you to easily find the current dot

## Prototype 5 (extra credit)
- in carousel.php
	- add a click handler onto each dot
	- when the dot is clicked, the prev_image/next_image function should be called
	- modify next_image and prev_image to receive an argument.
		- the argument will specify what the next current_image will be (Rather than simply incrementing / decrementing)
