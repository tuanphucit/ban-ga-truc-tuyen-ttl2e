<?php
	function validateName($name){
		//if it's NOT valid
		if(strlen($name) < 4)
			return false;
		//if it's valid
		else
			return true;
	}
	function validateEmail($email){
		return ereg("^[a-zA-Z0-9]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$", $email);
	}
	function validatePasswords($pass1, $pass2) {
		//if DOESN'T MATCH
		if(strpos($pass1, ' ') !== false)
			return false;
		//if are valid
		return $pass1 == $pass2 && strlen($pass1) >= 5;
	}
	function validatePhone($phone){
		//if it's NOT valid
		if(strlen($bank) < 10 || !is_numeric ($phone)) 
			return false;
		//if it's valid
		else
			return true;
	}
	function validateInden($phone){
		//if it's NOT valid
		if(strlen($inden) != 9 || !is_numeric ($inden)) 
			return false;
		//if it's valid
		else
			return true;
	}
?>