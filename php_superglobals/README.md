## Prototype 1
- Create index.php
  - use print_r to print the GET superglobal array
  - use var_dump to print the POST superglobal array
- Using postman
  - make POST / GET requests to your index.php file.  
  - Note the response
 
## Prototype 2  
- Create "form.html"
  - Create a form
    - input, name of "name", id of "my_name"
    - select, name of "gender", with options of "male", "female", and "other"
    - 3 inputs with identical values of
      - placeholder of 'favorite fruit'
      - name of 'fav_fruit[]' (yes, including the brackets)
    - a submit button
    - For the form action, put your index.php file
    - For the method, choose GET or POST and note the differences in the output
    
## Prototype 3
- Create "ajax.html"
  - Create a new form
    - with a checkbox.  value 'howdy'
    - with a textarea
    - a regular button that triggers an ajax call
  - Create an ajax call
    - for url, choose the index.php from above
    - for method, choose GET or POST at your discretion
    - for data, add the values of the form fields above
    - for dataType, choose text
    - console.log the response from index.php

  
