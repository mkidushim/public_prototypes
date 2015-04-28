# Prototypes

## Javascript - Comparisons and Conditionals

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.

<a href="https://github.com/Learning-Fuze/git-workflow#github-workflow">Click Here</a> For help with gitHub 

### Getting Started

1. Make an index.html inside the `js-conditionals` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. Inside your head tag create a script tag

## Comparisons

### Prototype

#### Create some variables

Between your script tags create the following variables

1. Declare a variable named `mySmallNumber` Set its value to `5`
2. Declare a variable named `myString` Set its value to `"5"`
3. Declare a variable named `myBigNumber` Set its value to `255`

#### Create output

Use `console.log()` to create the following outputs<br>
**Note** - Use actual comparisons to generate the true/false part of the output

1. Output 1: `"mySmallNumber == myString is true"`
2. Output 2: `"mySmallNumber === myString is false"`
3. Output 3: `"mySmallNumber < myBigNumber is true"`
4. Output 4: `"mySmallNumber > myBigNumber is false"`

#### Small challenge (optional)

Using the two variables `mySmallNumber and myString` from above, use a single `console.log()` to do the following

Concatenate the two variables together
then Use ` === ` to compare another concatenation of the two variables

What is the result?

Add a comment in your code with your answer if you dare!

## Conditionals

#### Create some more variables

1. Declare a variable named `myTruth` Set its value to `true`
2. Declare a variable named `myLie` Set its value to `false`

#### Create some conditionals

1. Using the `myTruth` variable write a single if statement that outputs: `"I'm true!"`
2. Using the `myLie` variable create an if/else statement
	- if true output `"I'm true!"`
	- else output `"I'm false!"`
3. Using both variables write an if/else statement
	- Example: if(myTruth == myLie)...
	- if true output `"I'm true!"`
	- else output `"I'm false!"`
4. Using the `myLie` variable create just an if statement that evaluates to `true`
	- Do not use an else condition
	- Have the output be `"I'm a true lie!"`

#### Create a Switch Statement

1. Declare a new variable called `myNumber` Set its value equal to a number between 1-100
2. Write a switch statement based on myNUmber that has three `case` statements plus a `default`
3. Make it so one of your `case` statements will be true
4. Create a unique `console.log()` for each `case` statement

## After you have completed all the above

1. add, commit, and push your updated files to your master branch on gitHub
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-4---pushing-your-work-back-to-github">Click Here</a> If you need help pushing to gitHub
2. Create a pull request
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-5---creating-a-pull-request-1">Click Here</a> For help creating a pull request
