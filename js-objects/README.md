# Prototypes

## Javascript - Objects

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.

<a href="https://github.com/Learning-Fuze/git-workflow#github-workflow">Click Here</a> For help with gitHub 

### Getting Started

1. Make an index.html inside the `js-objects` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. Add `script` tags between your `head` tags

## JS Objects

### Prototype 1: Student Object
- Create an object (student_object) that holds the name and grade (0-100) of a student
- Fill that object with data for a mock student

### Prototype 2: Collect Studen Objects
- Create a function (add_student()) that 
	- prompts for the student's name
	- prompts for the student's grade
	- creates the student_object from above, and inserts the new data into it
	- Add the object to a global array (student_array)
- Create a button(add student) in your index.html
- Attach the add student function as click handler using jquery to the add student button

### Prototype 3: 
- Create a div container on your page to serve as a student display area
- Create a button(Refresh Student Data)
- Make a function (list_students()) and add it as a click handler to the refresh button.  It should
	- Using bootstrap grid list all current students (from the array) into the student display area. 
	- List each student with the # of their index in array (0, 1, 2, 3, etc).  So for example: 15) Daniel Paschal - 75

### Prototype 4:
- Create a new button (delete student) to delete a student
- Function Handler should
	- prompt for an ID number
	- delete the student corresponding to the ID returned from the prompt (check that the index exists)
		- Somehow indicate whic user was removed from the list
	- Refresh the data by calling the function list_students()

## After you have completed all of the above

1. add, commit, and push your updated files to your master branch on gitHub
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-4---pushing-your-work-back-to-github">Click Here</a> If you need help pushing to gitHub
2. Create a pull request
	- If your last pull request for the `prototypes` repo is still open, you can skip this step
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-5---creating-a-pull-request-1">Click Here</a> For help creating a pull request
