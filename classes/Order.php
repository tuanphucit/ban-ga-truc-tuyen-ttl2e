<?php

include_once dirname(__FILE__)."../config/include.inc.php";
class Order {
	
	
	
	public static function getInfo($orderId){
		$db = new DB();
		$query  = "select * from `order` where id_order='{$orderId}';";
		$result = $db->runQuery($query);
		while ($row = mysql_fetch_assoc($result)) {
			$db->close();
			return $row;
		}
	}
	
	public static function addNewOrder($orderInfo, $status, $id_sale, $id_customer, $order_amount){
		$db = new DB();
		$query  = "INSERT INTO `bank`.`order` (`id_order`, `order_info`, `status`, `id_transaction`, `id_sale`, `id_customer`, `order_amount`) VALUES (null, '{$orderInfo}', '{$status}', '', '{$id_sale}', '{$id_customer}', '{$order_amount}');";
		$result = $db->runQuery($query);
		$db->runQuery($query);
		$db->close();
	}
	
	public static function getListOrder($customerId){
		$db = new DB();
		$query  = "select * from `order` where id_sale='{$customerId}' or id_customer='{$customerId}';";
		$result = $db->runQuery($query);
		$listOrder = array();
		while ($row = mysql_fetch_assoc($result)) {
			$listOrder[] = $row;
		}
		return $listOrder;
	}
	
	public static function getFullListOrder(){
		$db = new DB();
		$query  = "select * from `order` ";
		$result = $db->runQuery($query);
		$listOrder = array();
		while ($row = mysql_fetch_assoc($result)) {
			$listOrder[] = $row;
		}
		return $listOrder;
	}
	
	public static function changeStatus($orderId, $status){
		$db = new DB();
		$query  = "UPDATE  `order` SET  `status` =  '{$status}' WHERE  `id_order` ='{$orderId}';";
		$result = $db->runQuery($query);
		$db->runQuery($query);
		$db->close();
	}
	
	public static function cutString($str, $delimiter = '|'){
		$list        = explode($delimiter, $str);
		$listProduct = array();
		$size = ( sizeof($list) - 1) / 3;
		for ($i=0; $i<$size; $i++){
			$subStr  = explode("=", $list[$i*3 + 1]); 
			$listProduct[$i]['item_name'] = $subStr[1];
			$subStr  = explode("=", $list[$i*3 + 2]); 
			$listProduct[$i]['amount'] = $subStr[1];
			$subStr  = explode("=", $list[$i*3 + 3]); 
			$listProduct[$i]['quantity'] = $subStr[1]; 
		}  
		
		return $listProduct;
	}
}