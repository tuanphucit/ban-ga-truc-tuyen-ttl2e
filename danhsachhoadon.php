<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Danhh sách hóa đơn </title>
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
	include_once dirname ( __FILE__ ) . "../config/include.inc.php";
	$id_customer = 2;
	$order = new Order();
	//$orderList = $order->getListOrder($id_customer);
	$db = new DB();

	$list = $order->getListOrder($id_customer);
	//for($k = 0;$k< count($list);$k++){
		//print "$list[$k] ";
	//}
	$db = new DB();
	$query  = "select * from `order` where id_sale='{$id_customer}' or id_customer='{$id_customer}';";
	$result = $db->runQuery($query);

		
	print "<table border = 2 bordercorlor = \"green\" algin = center>";
	print "<caption> Danh sách đơn hàng</caption>";
	print "<td>id_order</td><td>oder_infor</td><td>status</td><td>id_transaction</td><td>id_sale</td><td>id_customer</td><td>order_amount</td><td>time</td>";
		
	while ( $row = mysql_fetch_array($result) ) 
	{ 
	
	
	print "<tr>";

	print "</tr>";
	print "<tr>";
	print "<td> {$row['id_order']} </td>";
	print "<td> {$row['order_info']} </td>";
	print "<td> {$row['status']} </td>";
	print "<td> {$row['id_transaction']} </td>";
	print "<td> {$row['id_sale']} </td>";
	print "<td> {$row['id_customer']} </td>";
	print "<td> {$row['order_amount']} </td>";
	print "<td> {$row['time']} </td>";
	print "</tr>";
	
	print "<br>";
	}
	print "</table>";
?>



</body>
</html>