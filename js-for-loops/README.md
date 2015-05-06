# Prototypes

## Javascript - For Loops

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.

<a href="https://github.com/Learning-Fuze/git-workflow#github-workflow">Click Here</a> For help with gitHub 

### Getting Started

1. Make an index.html inside the `js-for-loops` folder

2. Create a basic HTML DOM structure
	- DOCTYPE tag
	- HTML tag
	- head tag
	- body tag

3. Add `script` tags between your `head` tags

## JS For Loops

### Prototype

#### Build an array and loop through it

1. Create an array the contains at least five values of your choosing
2. Build a `for` loop that will use `console.log` to log out each value in your array to the console
	- *Hint* - `for(var i=0; i < myArray.length; i++){...}`
	- *Hint* - Place the `console.log()` between the `{}` of your `for` loop
	- *Reminder* - To access values in an array: `myArray[0]` **Try** replacing the `0` with `i`
3. Save your work and test your code, notice the output in the console
4. In the `for` loop you just created add an additional `console.log()` to log out the `i` variable
	- *Hint* - `console.log("i is equal to:", i);`
5. Save your work and test your code, notice the output in the console
	- note your new output for `i`

#### More array looping fun!

1. Create the **exact** following array
	- `var numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];`
2. Using a `for` loop, output **all** the numbers in **ascending** order, `1-10`
3. Save your work and test your code
4. Using the same array from above write a different `for` loop that outputs **all** the numbers in **descending** order, `10-1`
5. Save your work and test your code
6. Using the same array again write yet another `for` loop that only outputs **odd** numbers, `1 3 5 7...` 
7. Using your **exact** `for` loop from the previous step (#6), try using the following array
	- `var mixedArray = [4, 56, 11, 13, 97, 22, 7, 36, 19, 5, 8, 10];`
	- Does it still only output *odd* numbers?
	- If not can you fix it?

#### For in loop

1. Given the following object
	- `var seats = {seat1: 'Stu', seat2: 'Peggy', seat3: 'LoneStar', seat4: 'George', seat5: 'Mike'}`
	- Use a `for in` loop to loop through each key value pair
	- Create the following output `Stu is in seat1` `Peggy is in seat2` and so on ...

##### Don't forget to test all of your work

## After you have completed all the above

1. add, commit, and push your updated files to your master branch on gitHub
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-4---pushing-your-work-back-to-github">Click Here</a> If you need help pushing to gitHub
2. Create a pull request
	- If your last pull request for the `prototypes` repo is still open, you can skip this step
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-5---creating-a-pull-request-1">Click Here</a> For help creating a pull request
