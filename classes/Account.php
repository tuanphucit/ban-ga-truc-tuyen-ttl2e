<?php
//include_once dirname ( __FILE__ ) . "../config/include.inc.php";

class Account {
	public $id_account, $id_customer, $balance, $account_number;
	public function __construct($customerID,$accountID) {
		/*TODO
		 * Khoi tao 1 Account , neu 1 trong 2 gia tri = 0
		 * thi khoi tao theo gia tri khac co gia tri khac 0
		 */
		
		$db = new Db();
		$db->connect();
		if ($customerID != 0){
			$sql = "select * from account where id_customer = '$customerID'";
			$result = $db->runQuery($sql);
			while($row = mysql_fetch_array($result,MYSQL_ASSOC )){
				$this->balance = $row['balance'];
				$this->account_number = $row['account_number'];
				$this->id_customer = $row['id_customer'];
				$this->id_account = $row['id_account'];
			}
			return;
		}
		if($accountID !=0){
			$sql = "select * from account where id_account = '$accountID'";
			$result = $db->runQuery($sql);
			while($row = mysql_fetch_array($result,MYSQL_ASSOC )){
				$this->balance = $row['balance'];
				$this->account_number = $row['account_number'];
				$this->id_customer = $row['id_customer'];
				$this->id_account = $row['id_account'];
			}
			}
		
		//
		return;
		$db->close();
	}
	
	
	public function addAcount($_id_customer, $_balance, $_account_number) {
		// Khi có khác hàng dang kí t?o tài kho?n m?i thì admin ngân hàng s? set 
		$db = new DB ();
		$this->id_customer = $_id_customer;
		$this->balance = $_balance;
		$this->account_number = $_account_number;
		$db->connect ();
		$sql = "insert into account(id_customer,balance,account_number) values ('$_id_customer','$_balance','$_account_number')";
		$db->runQuery ( $sql );
		$db->close ();
	}
	public function updateBalance($id_account,$newBalance){
		$db= new DB();
		$db->connect();
		$sql = "update account set balance = '$newBalance' where id_account = '$id_account'";
		$db->runQuery($sql);
		
		$db->close();
	}
	public static function checkAccount($bankAccount) {
		$db = new DB ();
		$check = false;
		$sql = "select * from account where account_number = '$bankAccount'";
		$query = $db->runQuery ( $sql );
		if (mysql_num_rows ( $query ) != "") {
			$check = true;
		}
		
		return $check;
		$db->close();
	}
	
	public function transfer($accountID, $amount){
		
		$acc1 = new Account(0, $accountID);
		$acc1->balance -= $amount;
		if($acc1->updateBalance($acc1->id_account, $acc1->balance))
		{
			$this->balance += $amount;
			$this->updateBalance($this->id_account, $this->balance);
		}
		
	}
}