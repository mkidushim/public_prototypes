## Prototype 1
- Create index.php
  - include the following code in it
  - 
  ``` 
  <?php
    $a=1; $b=5;
    include('includes/data.php');
    $result = $a * $b;
    print("<br>Result is $result");
  </?>
  ```
- Create a folder called includes
- In the includes folder, create a file called 'data.php'
  - In the data.php file, include the following code:
  ```
  <?php 
  $a = 3;
  $b = 2; 
  ?>
  ```
- Run the file and note the print result

## Prototype 2
- Add the following code to the bottom of 'index.php'
```
<?php
    $c=2;
    include('includes/data2.php');
    include_once('includes/data2.php');
    include('includes/data2.php');
    $result2=$c;
    print("<br>Result 2 = $result2");
?>
```
- Create the file 'data2.php' with the following content:
```
<?php 
$c = $c * 2; 
?>
```
- Run index.php and note the value of result2
    
## Prototype 3
- Start a new file, index_main.php
- In this file include the following code
```
<main id="main_content">
    Main Content
</main>
<div>I'm not in the main content or the footer</div>
<footer>
    <nav id="site_map">
        <ul>
            <li>Location</li>
            <li>Contact Us</li>
            <li>Hours</li>
        </ul>
    </nav>
</footer>
```
- Add filler text into the main content, as well as a link to an image
- Run the file to ensure it looks correct
- Create a file, main.php
  - Take everything in between the "main" tags and move it into main.php
- Create a file, footer.php
  - Take everything in between the "footer" tags and move it into footer.php
- Run the file again, ensuring that the main content has only the div tag's contents are visible
- use include to include the main.php and footer.php into its appropriate place

