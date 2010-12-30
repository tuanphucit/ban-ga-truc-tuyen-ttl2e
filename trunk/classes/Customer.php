<?php
//include_once dirname(__FILE__)."../config/include.inc.php";
class Customer{
	
	
	public $id_customer,$name,$address,$email, $phone, $inden , $password , $pu_key, $pr_key, $time;
	
	public function __construct(){
		
	}
	public function getKey(){
	//	while(true){
			
		$rsa = new RSA(0,0);
		$rsa->genarateKey();
		$e = ($rsa->e);
		$d = ($rsa->d);
		$this->pu_key = (int)$d->toString();
		$this->pr_key = (int)$e->toString();
		$db = new DB();

		$db->connect();
		$sql1 = "select * from customer where public_key ='$d->toString()'";
		$sql2 = "select * from customer where private_key = '$e->toString()'";
		$result1 = $db->runQuery($sql1);
		$result2 = $db->runQuery($sql2);
		if((mysql_num_rows($result1)=="")&&(mysql_num_rows($result2)=="")){
			echo "Tao khoa thanh cong<br />";
			$this->pu_key = (int)$d->toString();
			$this->pr_key = (int)$e->toString();
			break;
		$db->close();
		}
		
		}
		
	//}
	public function addUser($_name, $_address, $_email, $_phone,$_password,$_time,$_inden){
		$_password = md5($_password);
		$this->name = $_name;
		$this->address = $_address;
		$this->email = $_email;
		$this->phone = $_phone;
		$this->inden = $_inden;
		$this->password = md5($_password);
		
		$this->getKey();
	
		// Get key
		/*$rsa = new RSA(0,0);
		$rsa->genarateKey();
		$e = ($rsa->e);
		$d = ($rsa->d);
		$this->pu_key = $d->toString();
		$this->pr_key = $e->toString();
		*/
		$this->time = $_time;
		
		$db = new DB();
		$db->connect();
		$sql = "insert into customer(name,address,email,phone,public_key,private_key,password,time,indentity_number) values ('$_name','$_address','$_email','$_phone','$this->pu_key','$this->pr_key','$_password','$_time','$_inden')";
		$db->runQuery($sql);
		$db->close();
	
	}
	
	public function getInfo($customerID = 0, $email = 0){
		$this->email = $email;
		$this->id_customer = $customerID;
		$db = new DB();
		$db->connect();
		if ($customerID !=0 )
			$sql = "select * from  customer where id_customer = '{$this->id_customer}'";
		else
			$sql = "select * from  customer where email = '{$this->email}'";
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
	
}