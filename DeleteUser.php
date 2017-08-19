<?php 
	include_once("UserController.php");  
	
	
	if($_GET["id"] != null){
		$id = $_GET["id"] ; 
		$control = new UserController();
		$result = $control->deleteUser($id);
		
		if($result === true){
			echo "Thanh cong"; die;
		}
	} 
?>