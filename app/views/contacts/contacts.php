<h1>Contacts</h1>

<table>	
<tr>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Action</th>
</tr>
<?php
	if($data['contacts']){
		foreach($data['contacts'] as $row){
			echo "<tr>";
			echo "<td>$row->firstName</td>";
			echo "<td>$row->lastName</td>";
			echo "<td>
			<a href='".DIR."contacts/edit/$row->id'>Edit</a>
			<a href='".DIR."contacts/delete/$row->id'>Delete</a>
			</td>";
			echo "</tr>";
		}
	}
?>
</table>