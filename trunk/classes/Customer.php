<?php
//include_once dirname(__FILE__)."../config/include.inc.php";
class Customer{
	
	
	public $id_customer,$name,$address,$email, $phone, $inden , $password , $pu_key, $pr_key, $time;
	
	public function __construct(){
		
	}
	public function addUser($_name, $_address, $_email, $_phone,$pu_key,$pr_key , $_password,$_time,$_inden){
		
		$this->name = $_name;
		$this->address = $_address;
		$this->email = $_email;
		$this->phone = $_phone;
		$this->inden = $_inden;
		$this->password = $_password;
		
		// Get key
		$rsa = new RSA(0,0);
		$rsa->genarateKey();
		$e = ($rsa->e);
		$d = ($rsa->d);
		$this->pu_key = $d->toString();
		$this->pr_key = $e->toString();
		
		$this->time = $_time;
		
		$db = new DB();
		$db->connect();
		$sql = "insert into customer(name,address,email,phone,public_key,private_key,password,time,indentity_number) values ('$_name','$_address','$_email','$_phone','$this->pu_key','$this->pr_key','$_password','$_time','$_inden')";
		$db->runQuery($sql);
		$db->close();
	
	}
	
	public function getInfo($customerID = 0, $customerName = 0){
		$this->name = $customerName;
		$this->id_customer = $customerID;
		$db = new DB();
		$db->connect();
		if ($customerName !=0 )
			$sql = "select * from  customer where name = '{$this->name}'";
		if ($customerID !=0 )
			$sql = "select * from  customer where id_customer = '{$this->id_customer}'";
		$result = $db->runQuery($sql);
		
		while($row = mysql_fetch_array($result,MYSQL_ASSOC ))
			{
   				 $this->id_customer= $row['id_customer'];
   				 $this->name       = $row['name'];
        		 $this->address    = $row['address'];
        		 $this->email      = $row['email'];
        		 $this->phone      = $row['phone'];
        		 $this->inden      = $row['indentity_number'];
        		 $this->password   = $row['password'];
        		 $this->pu_key =$row['public_key'];
        		 $this->pr_key =$row['private_key'];
        		 $this->time = $row['time'];
        		 break;
			} 
		
		
		$db->close();
	}
	
	public static function getSecureNumber($bankAccount){
		return '426258731964017747';
	}
	
}