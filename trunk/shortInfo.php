<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chuyển khoản</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="css/shortInfo.css" />
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
</head>
<body>



<?php
	include_once dirname(__FILE__)."../config/include.inc.php";
	session_start();
	$customerID = $_SESSION['user'];
	$account = new Account($customerID,0);
	$account_number = $account->account_number;
	$balance        = $account->balance;
	$customer       = new Customer();
	$customer->getInfo($customerID,0);
?>
<div class="form_login">
<table width="170px" border="0" cellpadding="0" cellspacing="0">
			<tr><td/></tr><tr><td/></tr><tr><td/></tr>
			<tr>

				<td height="45">

				<div class="home-form-login-title">Thông tin tài khoản</div>

				</td>

			</tr>

			<tr>

				<td height="25" class="form-content-text"><b>Email:</b> <?php echo $customer->email?></td>

			</tr>

			<tr>

				<td height="25" class="form-content-text"><b>Loại tài khoản:</b> Cá nhân</td>

			</tr>
			<tr>

				<td height="25" class="form-content-text"><b>Số dư tài khoản:</b> <?php echo $balance;?></td>

			</tr>

		</table>
		<div id="logout">
			<a href="logout.php">Logout</a>
		</div>
</div>

</body>
</html>