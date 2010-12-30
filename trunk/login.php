
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
	$customer->getInfo(0,$usr);
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


