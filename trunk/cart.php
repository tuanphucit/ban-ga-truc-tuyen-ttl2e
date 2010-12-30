<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Cart</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php 
	include_once dirname(__FILE__)."../config/include.inc.php";
	session_start();
	$customerID = $_SESSION['user'];
	if (!isset($customerID)){
		echo "
			<script type='text/javascript'>
				alert('Cần phải đăng nhập trước');
				window.location.replace('index.php');
			</script>
		";
	}
	$account = new Account($customerID,0);
	$account_number = $account->account_number;
	$balance        = $account->balance;
	$customer       = new Customer();
	$customer->getInfo($customerID,0);
	$bank_number =  '267794161';
	
	
	$listProduct = 0;
	$saleID      = $_GET['business'];
	$customerID  = $_GET['customerID']; 
	
	// Check and Get customerID = bank number
	$rsa = new RSA(0, 0);
	$customerID = $rsa->decrypt($customerID, new Math_BigInteger($customer->pu_key), new Math_BigInteger($bank_number));
	if ($account_number != $customerID)
		echo "
			<script type='text/javascript'>
				alert('Đơn hàng lỗi, quay về trang chủ');
				window.location.replace('index.php');
			</script>
		";
		
	$order = $_GET['order'];
	$listProduct = Order::cutString($order);
	
	////////// Tong hop don hang
	echo "<center><h2>Tổng hợp đơn hàng</h2></center>";
	echo "<table>";
		echo "<tr>";
			echo "<td>";
				echo "Tên hàng";
			echo "</td>";
			echo "<td>";
				echo "Đơn giá";
			echo "</td>";
			echo "<td>";
				echo "Số lượng";
			echo "</td>";
		echo "</tr>";
		$total = 0;
		for ($i = 0; $i< sizeof($listProduct); $i++){
			echo "<tr>";
			echo "<td>";
				echo $listProduct[$i]['item_name'];
			echo "</td>";
			echo "<td>";
				echo $listProduct[$i]['amount'];
			echo "</td>";
			echo "<td>";
				echo $listProduct[$i]['quantity'];
			echo "</td>";
			$total += $listProduct[$i]['amount'] * $listProduct[$i]['quantity'];
		echo "</tr>";
		}
	echo "</table>";
	echo "Tổng giá trị là: {$total} <br/>";
?>
<form method="post">
	<input type="hidden" name="order_info" value="<?php echo $order; ?>"/>
	<input type="hidden" name="saleID" value="<?php echo $saleID; ?>"/>
	<input type="hidden" name="customerID" value="<?php echo $customerID; ?>"/>
	<input type="hidden" name="orderAmount" value="<?php echo $total; ?>"/>
	<input type="submit" value="Mua hàng"/>
</form>

<?php 
	if (isset($_POST['orderAmount'])){
		if ($balance < $total){
			echo ' * Số tiền vượt quá tài khoản';
		}
		else{
			$account = new Account(0,$_POST['customerID']);
			Order::addNewOrder($_POST['order_info'], 0, $_POST['saleID'], $account->id_customer, $_POST['orderAmount']);
			echo "
			<script type='text/javascript'>
				window.location.replace('thongtintaikhoan.php');
			</script>
		";
		}
		
	}
?>
</body>
</html>
