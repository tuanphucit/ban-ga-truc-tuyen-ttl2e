<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.5.custom.css"
	rel="Stylesheet" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script>
<link rel="stylesheet" type="text/css" media="all"
	href="css/thongtintaikhoan.css" />
</head>
<body>

<?php 
	session_start();
	$customerID = $_SESSION['user'];
	if (isset($customerID)){
		die ("Welcome {$customerID}");
	}
?>
<form method="post">
	<input type="text" name="usr" />
	<input type="password" name="pwd" />
	<input type="submit" value="login" />
</form>

<?php
include_once dirname ( __FILE__ ) . "../config/include.inc.php";
$account = new Account ();
?>


<?php
include_once dirname ( __FILE__ ) . "../config/include.inc.php";
if (isset($_POST['usr'])){
	$usr = $_POST['usr'];
	$pwd = $_POST['pwd'];
	$customer = new Customer();
	$customer->getInfo($usr);
	//Login Success
	if ($customer->password == $pwd){
		$_SESSION['user'] = $customer->id_customer;
		echo "Login Success {$customer->id_customer}";
	}
	//Login Fail
	else{
		echo "Login Fail";
	}
}
?>


</body>
</html>
