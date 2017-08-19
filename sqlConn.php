<?php
class PhpConnection{
	function connect(){
		return $conn = new mysqli("localhost", "root", "", "workshop");
	}
	
}
?>