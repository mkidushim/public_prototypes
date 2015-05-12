# Prototypes

## Bootstrap - Grids

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.

<a href="https://github.com/Learning-Fuze/git-workflow#github-workflow" target="_blank">Click Here</a> For help with gitHub 

### Getting Started

1. `index.html` has already been created for you to use

In the head tag you will see a `link` tag that looks like:<br>
	`<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">`<br>
This is where the **Bootstrap** stylesheet comes from

Open the `index.html` file in your browser

## Bootstrap Grids

### Prototype

#### Looking over some examples

- Look in your browser if you haven't already
- Notice the blue and yellow divs are stacked on top of each other

#### First columns  

- Add a class to both the `blue` and `yellow` divs of `col-md-6`
	- *Hint* - `<div class="blue col-md-6"></div>`
- Save your work and refresh your page in the browser
	- Notice now the two divs are side by side
- A couple things to note: The colored divs are inside a `div` with a class of `row` which is in turn inside a `div` with a class of `container`

- The number 6 in the class name above represents the width of your column. The total of all your columns should always be equal to 12.
	- If you have 3 columns you would use `col-md-4`
	- 4 columns would use `col-md-3` and so on...
	<img src="https://github.com/Learning-Fuze/prototypes/blob/master/bs-grids/images/bs-grid-layout.png?raw=true" alt="Bootstrap column example">

	For a more detailed explanation of the bootstrap grid system <a href="http://www.w3schools.com/bootstrap/bootstrap_grid_system.asp" target="_blank">Click Here</a>

#### Add some more columns 
- Add two more divs in your row
	- Use the pre-made color classes to give one a color of `red` and the other `green`
- Add the appropriate bootstarp class for four columns
- Save your work and refresh your page
- You should now have four columns of different colors vertically centered on your page

#### Add an additional row
- Add another `div` with a class of `row` and fill it with four colored divs
	- Put the colors in a different order than that of your first row so you can see the separate rows
- You should now have two rows of colored divs

#### The grid
- Pick two colors and build at least a 6x6 checkerboard
- You will need to adjust the height of your divs inside the style tags 

## After you have completed all the above

1. add, commit, and push your updated files to your master branch on gitHub
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-4---pushing-your-work-back-to-github" target="_blank">Click Here</a> If you need help pushing to gitHub
2. Create a pull request
	- If your last pull request for the `prototypes` repo is still open, you can skip this step
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-5---creating-a-pull-request-1" target="_blank">Click Here</a> For help creating a pull request
