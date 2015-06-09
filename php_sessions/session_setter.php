<?php
session_start();
?>
<form action="session_reader.php" method="POST">
<input style="display: block" type="text" placeholder="Name" name="name" value="<?=(isset($_SESSION['name']) ? $_SESSION['name']:''); ?>">
<input style="display: block"  type="text" placeholder="Age" name="age" value="<?=(isset($_SESSION['age']) ? $_SESSION['age']:'');?>">
<input style="display: block"  type="text" placeholder="Occupation" name="occupation" value="<?=(isset($_SESSION['occupation']) ? $_SESSION['occupation']:'');?>">
	<button>Submit</button>
	<button type="reset">Reset</button>
	<div>
	<p style="color: red; font-size: 18px; text-decoration: underline;">Input Errors:</p>
	<?php  
	if(isset($_SESSION['errors'])) {
	print_r($_SESSION['errors']);
	
	}

	?>
	</div>
</form>