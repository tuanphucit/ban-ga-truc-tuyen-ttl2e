<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.5.custom.css"
	rel="Stylesheet" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script>
<link rel="stylesheet" type="text/css" media="all"
	href="css/thongtintaikhoan.css" />
</head>
<body>

<form method="post">
Họ tên :    <input type="text" name = "name" size="25"/><br />
Mật khẩu: 	<input type="password" name = "pass" size="25"/><br />
Nhập lại mật khẩu:	<input type="password" name = "re_pass" size="25"/><br />
CMTND		<input type="text" name = "inden" size="25"/><br />
Địa chỉ		<input type="text" name = "address" size="25"/><br />
Email:		<input type="text" name = "email" size="25"/> <br />
Điện thoại: <input type="text" name = "phone" size="25" /><br />
<input type ="submit" name = "addCus" value="Create new customer"/><br />
</form>
<?php 
	include_once dirname ( __FILE__ ) . "../config/include.inc.php";
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$re_pass = $_POST['re_pass'];
	$inden = $_POST['inden'];
	$addr = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	$db = new DB();
	$sql = "select * from customer where email ='$email'";
	$result = $db->runQuery($sql);
	if(mysql_num_rows($result)!=""){
		echo "Tài khoản này đã tồn tại<br />";
		}
	else 
	{
		$cus = new Customer();
		$date = date('Y-m-d');
		// tao khoa  cho tai khoan vua tao
		$cus->addUser($name, $addr, $email, $phone,'12','12',$pass,$date ,$inden);
		echo "Tạo tài khoản mới thành công <br />";
	}
?>
</body>
</html>