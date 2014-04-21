
<?php
if(isset($error)){
	foreach($error as $error){
		echo "<p>$error</p>";
	}
}
?>

<form action='' method='post'>

<p>First Name<br /><input type='text' name='firstName' value='<?php echo $data['row'][0]->firstName;?>'></p>
<p>Last Name<br /><input type='text' name='lastName' value='<?php echo $data['row'][0]->lastName;?>'></p>
<p><input type='submit' name='submit' value='Update'></p>

</form>