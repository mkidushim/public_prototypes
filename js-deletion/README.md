Modify your code successively with each step.  Make sure to do a commit step, at least.

### 1) create an array named student_array
- it should contain 10 objects with the following definition: {name: &lt;pick a name;&gt;, class:&lt;pick a class;&gt;}
- For example:
<pre>[
		{name: 'John', class:'Physics'},
		{name: 'Jane', class:'Math'},
		{name: 'Joan', class:'English'},
	]
</pre>

### 2) Create a repeat loop that creates a div for each student in a main container, for example:
<pre><xmp>
<div id='student_container'>
		<div class='student_row'>
			<span class='student_name'>John</span>
			<span class='student_class'>Physics</span>
		</div>
		<div class='student_row'>
			<span class='student_name'>Jane</span>
			<span class='student_class'>Math</span>
		</div>
</div>
</xmp></pre>

### 3) In your repeat loop from #2
- create an attribute for student_row that holds the index for each student
- for example:
<pre><xmp>
<div id='student_container'>
		<div class='student_row' data-index='0'>
			<span class='student_name'>John</span>
			<span class='student_class'>Physics</span>
		</div>
		<div class='student_row' data-index='1'>
			<span class='student_name'>Jane</span>
			<span class='student_class'>Math</span>
		</div>
</div>
</xmp></pre>

### 4) Add a click handler to #2
- that puts a click handler onto each student_row
   - the click handler should save a variable that contains the data-index
   - Use the keyword <em>this</em> to get the attribute
   - console.log the the variable, for example:
       - "student 0 was clicked"
       - "student 5 was clicked"

### 5) In the click handler from #2
- Delete the object that corresponds to the index found above
- Console log out the new array

### 6) In the click handler from #2
- using <em>this</em> and the jquery function <em>remove</em>, delete the corresponding student_row



    
