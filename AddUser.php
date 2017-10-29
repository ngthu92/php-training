<!DOCTYPE html>
<html>
<?php 
	include_once("UserController.php");  
	
	if(isset($_POST['Add'])) 
	{ 
		$control = new UserController();
		
		$username = $_POST["username"];
		$password = $_POST["password"];
		$fullname = $_POST["fullname"];
		$email = $_POST["email"];
		
		$result = $control->addUser($username,$password,$fullname,$email);
		
		if($result === true){
			echo "Thanh cong"; die;
		}
	} 
?>

<head>
<title>Workshop</title>
</head>
<body>
<form action='' method='POST'>

	Username: <br>
  <input type="text" name="username" value="" placeholder="Please enter your username"><br>
  Password:<br>
  <input type="password" name="password" value=""><br>
  Full name:<br>
  <input type="text" name="fullname" value=""><br>
  Email:<br>
  <input type="text" name="email" value=""><br><br>
  <input type="submit" value="Submit" name="Add">

</form>
</body>
</html>