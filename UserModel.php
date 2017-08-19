<?php
	include_once("sqlConn.php");  
	class User{
		var $id;
		var $username;
		var $password;
		var $fullname;
		var $email;
		var $active;
		
		//ham getall
		function getAll(){
			$connect = new PhpConnection();
			$conn = $connect->connect();
			if ($conn === null) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM users";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				return $result;
			}
			return null;
		}
		function getUser($id){
			$connect = new PhpConnection();
			$conn = $connect->connect();
			if ($conn === null) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT * FROM users where id=".$id;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				return $result;
			} 
			return null;
		}
		function addUser($username,$password,$fullname,$email){
			$connect = new PhpConnection();
			$conn = $connect->connect();
			if ($conn === null) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "INSERT INTO users (username,password,fullname,email) values('".$username."','".$password."','".$fullname."','".$email."')";
			$result = $conn->query($sql);

			return $result;
		}
		function updateUser($id,$username,$password,$fullname,$email){
			$connect = new PhpConnection();
			$conn = $connect->connect();
			if ($conn === null) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "UPDATE users set username='".$username."',password='".$password."',fullname='".$fullname."',email='".$email."' WHERE id=".$id;
			$result = $conn->query($sql);
			
			return $result;
		}
		function deleteUser($id){
			$connect = new PhpConnection();
			$conn = $connect->connect();
			if ($conn === null) {
				die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "DELETE FROM users where id = ".$id;
			$result = $conn->query($sql);
			
			return $result;
		}
		
	}
?>