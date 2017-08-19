<?php
    include_once("UserModel.php");  
	class UserController{
		function getAll(){
			$user = new User();
			$listUser = $user->getAll();
			return $listUser;
		}
		
		function getUser($id){
			$user = new User();
			$users = $user->getUser($id);
			if($users != null)
			return $users->fetch_assoc();
			else return null;
		}
		
		function addUser($username,$password,$fullname,$email){
			$user = new User();
			$result = $user->addUser($username,$password,$fullname,$email);
			return $result;
		}
		
		function updateUser($id,$username,$password,$fullname,$email){
			$user = new User();
			
			$result = $user->updateUser($id,$username,$password,$fullname,$email);
			return $result;
		}
		
		function deleteUser($id){
			$user = new User();
			$result = $user->deleteUser($id);
			return $result;
		}
		
	}
?>