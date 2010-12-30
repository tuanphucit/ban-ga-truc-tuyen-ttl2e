<?php

	session_start();
	session_unregister('user');
	
	header("Location: index.php");
?>