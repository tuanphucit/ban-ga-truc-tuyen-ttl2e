<?php
include_once dirname(__FILE__)."../config/include.inc.php";
class Customer{
	
	
	public $id_customer,$name,$address,$email, $phone, $inden , $password;
	
	public function __construct(){
		
	}
	public function addUser($_name, $_address, $_email, $_phone, $_inden, $_password){
		
		$this->name = $_name;
		$this->address = $_address;
		$this->email = $_email;
		$this->phone = $_phone;
		$this->inden = $_inden;
		$this->password = $_password;
		
		$db = new DB();
		$db->connect();
		$sql = "insert into customer(name,address,email,phone,indentity_number,password) values ('$_name','$_address','$_email','$_phone','$_inden','$_password')";
		$db->runQuery($sql);
		$db->close();
	
	}
	
	public function getInfo($userID){
		$this->id_customer = $userID;
		$db = new DB();
		$db->connect();
		$sql = "select * from  customer where id_customer = $this->id_customer";
		$result = $db->runQuery($sql);
		
		while($row = mysql_fetch_array($result,MYSQL_ASSOC ))
			{
   				$this->name= $row['name'];
        		 $this->address = $row['address'];
        		 $this->email = $row['email'];
        		 $this->phone = $row['phone'];
        		 $this->inden =$row['indentity_number'];
        		 $this->password = $row['password'];
         	
			} 
		
		
		$db->close();
	}
	
	public static function getSecureNumber($bankAccount){
		return '426258731964017747';
	}
	
}