<!DOCTYPE html>
<html>
<?php 
	include_once("UserController.php");  
	$control = new UserController();
	$listUser = $control->getAll();
?>

<head>
<title>Workshop</title>
</head>
<body>

<h2>List User</h2>
<a href="AddUser.php">Add</a>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Username</th>
		<th>Fullname</th>
		<th>Email</th>
		<th></th>
		<th></th>
	</tr>
	<?php
	if($listUser != null){
		while($row = $listUser->fetch_assoc()) {
			echo "<tr><td>".$row["ID"]."</td><td>".$row["username"]." </td><td>".$row["fullname"]."</td><td>".$row["email"]."</td>";
			echo "<td><a href='DeleteUser.php?id=".$row["ID"]."'>Delete</a></td>";
			echo "<td><a href='EditUser.php?id=".$row["ID"]."'>Edit</a></td></tr>";
		}
	}
	?>
</table>

</body>
</html>