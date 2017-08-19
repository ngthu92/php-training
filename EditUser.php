<!DOCTYPE html>
<html>
<?php 
	include_once("UserController.php");  
	$username = "";
	$password = "";
	$fullname = "";
	$email = "";
	if($_GET["id"] != null){
		$id = $_GET["id"] ;
		$control = new UserController();
		$user = $control -> getUser($id);
	
		$username = $user["username"];
		$password = $user["password"];
		$fullname = $user["fullname"];
		$email = $user["email"];
	
	
		if(isset($_POST['Edit'])) 
		{ 
			$control = new UserController();
			
			$username = $_POST["username"];
			$password = $_POST["password"];
			$fullname = $_POST["fullname"];
			$email = $_POST["email"];
			
			$result = $control->updateUser($id,$username,$password,$fullname,$email);
			
			if($result === true){
				echo "Thanh cong"; die;
			}
		} 
	}
?>

<head>
<title>Workshop</title>
</head>
<body>
<form action='' method='POST'>

	 Username:<br>
  <input type="text" name="username" value="<?php echo $username ?>"><br>
  Password:<br>
  <input type="password" name="password" value=""><br>
  Full name:<br>
  <input type="text" name="fullname" value="<?php echo $fullname ?>"><br>
  Email:<br>
  <input type="text" name="email" value="<?php echo $email ?>"><br><br>
  <input type="submit" value="Submit" name="Edit">
  <input type="reset" value="Reset" name="Reset">

</form>
</body>
</html>