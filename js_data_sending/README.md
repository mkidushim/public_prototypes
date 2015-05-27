# ajax_prototype

### 1) In index.html, in the #input_area
- Add 3 inputs holding
	- Name
	- Age
	- Favorite Color

### 2) In main.js
- Add code to the $.ajax call to
	- send data to the address: 'http://s-apis.learningfuze.com/sgt/reflect/'
	- expect html data back
	- not cache the results
	- allow cross domain requests
	- handle successful ajax requests

### 3) In your main.js, in the AJAX success call:
- Add code to do the following:
	- send data from your input using the 'data' key value pair, it should:
		- send a key/value from each of your input fields

### 4) In your main.js, in the AJAX success call:
- Print the response from the server in the #data_display area