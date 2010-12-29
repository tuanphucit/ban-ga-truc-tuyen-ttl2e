<?php
include_once dirname(__FILE__)."../config/include.inc.php";

class Account{
	
	public function __construct(){
		
	}
  public $id_account, $id_customer, $balance, $account_number;
  
  public function addAcount($_id_customer,$_balance,$_account_number){
  	$db = new DB();
  	$this->id_customer =$_id_customer;
  	$this->balance =$_balance;
  	$this->account_number = $_account_number;
  	$db->connect();
  	$sql = "insert into account(id_customer,balance,account_number) values ('$_id_customer','$_balance','$_account_number')";
  	$db->runQuery($sql);
  	$db->close();
  }
	public static function checkAccount($bankAccount){
		$db = new DB();
		$check = false;
		$sql = "select * from account where account_number = '$bankAccount'";
		$query = $db->runQuery($sql);
		if(mysql_num_rows($query)!= ""){
			$check = true;
		}
		 return $check;
	}
}