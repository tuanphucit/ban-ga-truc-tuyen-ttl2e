<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Cart</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php 
	include_once dirname(__FILE__)."../config/include.inc.php";
	$bank_number =  '483639716507806927';
	
	
	$listProduct = 0;
	$saleID      = $_GET['business'];
	$customerID  = $_GET['customerID']; 
	
	// Check and Get customerID
	$rsa = new RSA(0, 0);
	$customerID = $rsa->decrypt($customerID, new Math_BigInteger(Customer::getSecureNumber($saleID)), new Math_BigInteger('483639716507806927'));
	if (! Account::checkAccount($customerID))
		die("Wrong Customer ID");
		
	$order = $_GET['order'];
	$listProduct = Order::cutString($order);
	
	echo "Sale ID:".$saleID."<br/>";
	echo "Customer ID:".$customerID."<br/>";
	echo "order:";
	print_r($listProduct);
?>
</body>
</html>
