# Prototypes

## Javascript - jQuery

To get these files to your local machine you will need to do the following

1. Open your console to the proper directory
2. pull from the original Learningfuze repo
	- Use the following command:
		`git pull https://github.com/Learning-Fuze/prototypes.git master`
	- This will pull all the files from the original LearningFuze repo that you forked from, then merge the files with your existing files on your local machine.

<a href="https://github.com/Learning-Fuze/git-workflow#github-workflow" target="_blank">Click Here</a> For help with gitHub 

### Getting Started

1. `index.html` and `style.css` have already been created for you to use

In the head tag you will see a `script` tag that looks like:<br>
	`<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>`<br>
This is where the jQuery library comes from

To use jQuery in your javascript it must be called before any of your javascript

Open the `index.html` file in your browser (open your console)

## jQuery

### Prototype

#### Looking over some examples

1. In your browser try clicking on the different divs
	- Don't forget to watch what happens in the console also
	- For now only `div1` and `div2` do anything
2. Review the code that is already included in you `index.html` file
3. On line 14 we are adding the "red" class that is predefined in the `style.css` file
	- Change the word "red" to "pink"
	- Save and Refresh your page
	- Notice the different background for `div1`
	- Update the `console.log()` on line 20 to reflect the new color of `div1`
4. Click on `div2` a few times
	- Notice the color change and what is output to the console

#### Time to try it on your own 

1. Using jQuery add the class "card-back" to `div3` and `div4`
	- <a href="https://api.jquery.com/addclass/" target="_blank">Click Here</a> For an explanation and examples of the `.addClass()` method
2. Now using jQuery create a click handler for `div3`
	- Refer to `index.html` for an example (line 19)
	- Inside your click handler use the `.toggleClass()` method to change the class to "flag"
	- <a href="https://api.jquery.com/toggleclass/" target="_blank">Click Here</a> For an explanation and examples of the `.toggleClass()` method
3. Using jQuery create a click handler for `div4`
	- Refer to `index.html` for an example (line 19)
	- Inside your click handler use the `.toggleClass()` method to change the class to "path"
	- <a href="https://api.jquery.com/toggleclass/" target="_blank">Click Here</a> For an explanation and examples of the `.toggleClass()` method

Now when you click on `div3` it should switch between the picture of the card back and a picture of the British flag. Also clicking on `div4` should change the picture between the card back and a picture of a nice path

## After you have completed all the above

1. add, commit, and push your updated files to your master branch on gitHub
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-4---pushing-your-work-back-to-github" target="_blank">Click Here</a> If you need help pushing to gitHub
2. Create a pull request
	- If your last pull request for the `prototypes` repo is still open, you can skip this step
	- <a href="https://github.com/Learning-Fuze/git-workflow#step-5---creating-a-pull-request-1" target="_blank">Click Here</a> For help creating a pull request