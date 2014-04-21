
<?php
if(isset($error)){
	foreach($error as $error){
		echo "<p>$error</p>";
	}
}
?>

<form action='' method='post'>

<p>First Name<br /><input type='text' name='firstName' value='<?php echo $_POST['firstName'];?>'></p>
<p>Last Name<br /><input type='text' name='lastName'></p>
<p><input type='submit' name='submit' value='Submit'></p>

</form>