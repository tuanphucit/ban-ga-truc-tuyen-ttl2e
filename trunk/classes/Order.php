<?php

include_once dirname(__FILE__)."../config/include.inc.php";
class Order {
	
	
	
	public static function getInfo($orderId){
		$db = new DB();
		$query  = "select * from `order` where id_order='{$orderId}';";
		$result = $db->runQuery($query);
		while ($row = mysql_fetch_assoc($result)) {
			return $row;
		}
		$db->close();
	}
	
	public static function addNewOrder($orderInfo, $status, $id_sale, $id_customer, $order_amount){
		$db = new DB();
		$query  = "INSERT INTO `bank`.`order` (`id_order`, `order_info`, `status`, `id_transaction`, `id_sale`, `id_customer`, `order_amount`) VALUES (null, '{$orderInfo}', '{$status}', '', '{$id_sale}', '{$id_customer}', '{$order_amount}');";
		$result = $db->runQuery($query);
		$db->runQuery($query);
		$db->close();
	}
}