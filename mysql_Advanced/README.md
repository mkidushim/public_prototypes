#MySQL Advanced

## Getting Started

- Start your MySQL server 
- Navigate to phpMyAdmin
- Click on the Import tab
- Click on the `Choose File` button near the center of the screen
- Choose the `school_db.sql` file included with this prototype
- Click on the `Go` button at bottom of page
- You should now have the `school_db` with the two tables:
	- grades
	- students

### Aliasing

- Try using aliasing in the following exercises

### ORDER BY

- In phpMyAdmin navigate to the SQL tab
- Write a statement to get a list of all courses in alphabetical order from the `grades` table
- Write a statement to get a list of all students in alphabetical order by last name from the `student` table

### LIMIT

- In phpMyAdmin navigate to the SQL tab
- Get a list of the first 5 grades in the `Algebra 92` class in descending order from the `grades` table

### JOIN

- In phpMyAdmin navigate to the SQL tab
- Get a list of all the classes `Jacob Henderson` is taking using both tables

### GROUP BY

- In phpMyAdmin navigate to the SQL tab
- Get the average grade in each course and group by course in the grades table
