# Prototypes

## Javascript - Reference Data Types

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.

<a href="https://github.com/Learning-Fuze/git-workflow#github-workflow">Click Here</a> For help with gitHub 

### Getting Started

1. Make an index.html inside the `js-ref-data-types` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. Add `script` tags between your `head` tags

## JS Reference Data Types

### Prototype

#### Build an array

1. Declare an array that has at least 4 animal types in it, as strings, name it: `animals`
2. Use `console.log()` to print out a sentence about one of your animals from your array
	- Use your array in your `console.log()`
	- Example: `console.log("My favorite animal is " + animals[2]);` (Create your own sentence, don't copy this one)

Open your page in your browser, open your console

Do you see your sentence?

#### Quick `console.log()` exercise

1. In your console, type: `console.log("Here is my animal array " + animals);`
2. Now try typing: `console.log("Here is my animal array", animals);`

Notice the difference, this is why using commas in your `console.log()` can be very useful.

#### Build an object (You down with O.O.P.)

1. Declare an empty object variable named, `student`
	- *Hint* - `var student = {}`
2. Using dot notation add the following 'key: value` pairs to your student object
	- `firstName` as a string
	- `lastName` as a string
	- `age`- as a number
	- `school` as a string
	- `classList` as an array
	- *Hint* - `student.firstName = "John";
3. Add the following three functions to your `student` object
	- `greeting()`
		- This function should output: `"Hello, my name is [your name]"`
	- `aboutMe()`
		- This function should output: `"My full name is [your first and last name], I am [age] years old and I am a student at [school name]."`
	- `myClasses()` **Alert** - This function is optional
		- This function should output: `"I am taking the following classes: [class 1] [class 2] [class 3] etc.."`
		- This can be done by looping through your classList array 
		- *Reminder* - `myClasses()` is optional
4. Using `console.log()` create output in your console from your functions
	- *Hint* - `console.log("Greeting function: ", student.greeting());`

Save your work, refresh the page

Use the console to make sure everything works as expected.

#### Quick `console.log()` exercise (yes, again)

1. In your console, type: `console.log("Here is my student object " + student);`
2. Now try typing: `console.log("Here is my student object", student);`

Notice the difference, this is why using commas in your `console.log()` can be very useful.

## After you have completed all the above

1. add, commit, and push your updated files to your master branch on gitHub
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-4---pushing-your-work-back-to-github">Click Here</a> If you need help pushing to gitHub
2. Create a pull request
	- If your last pull request for the `prototypes` repo is still open, you can skip this step
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-5---creating-a-pull-request-1">Click Here</a> For help creating a pull request
