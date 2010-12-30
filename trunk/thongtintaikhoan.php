<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Thông tin tài khoản</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.5.custom.css"
	rel="Stylesheet" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.5.custom.min.js"></script>
<link rel="stylesheet" type="text/css" media="all"
	href="css/chuyenkhoan.css" />
</head>
<body>

<?php
	include_once dirname ( __FILE__ ) . "../config/include.inc.php";session_start();
	$customerID = $_SESSION['user'];
		if (!isset($customerID)){
			echo "<a href='login.php'>Click here to login</a>";
			return;
		}
	$acc = new Account($customerID,0);
	$account_number = $account->account_number;
	$balance        = $account->balance;
	$cus       = new Customer();
	$cus->getInfo($customerID,0);

	print "<table class=\"tbllisting hasborder\" border=1>";
	print "<caption>Thông tin tài khoản</caption>";

	print "<tr>";

	print "<td class=\"tdlabel\" width=\"20%\">Tên tài khoản</td>";

	print "<td width=\"30%\">$cus->name</td>";

	print "<td class=\"tdlabel\" width=\"25%\">Số CIF</td>";

	print "<td width=\"20%\">4341484</td>";

	print "</tr><tr>";

	print "<td class=\"tdlabel\">Địa chỉ</td>";

	print "<td>$cus->address</td>";

	print "<td class=\"tdlabel\">Số CMND/Hộ chiếu</td>";

	print "<td>$cus->inden</td></tr><tr>";

	print "<td class=\"tdlabel\">Số tài khoản</td>";

	print "<td>$acc->account_number</td>";

	print "<td class=\"tdlabel\">Loại tiền</td>";

	print "<td>VND</td></tr><tr>";

	
	print "<td colspan=\"4\" class=\"Account_Inform1\">Loại tài khoản: Tài khoản tiền gửi không kỳ hạn</td></tr>";

	


	//<!--Chi tiết TK DD-->

	print "<tr>";

	print 	"<td class=\"tdlabel\">Số dư hiện tại</td>";

	print 	"<td>$acc->balance</td>";

	print 	"<td class=\"tdlabel\">Ngày mở tài khoản</td>";

	print 	"<td>02/04/10</td>";

	print "</tr><tr>";

	
	print 	"<td class=\"tdlabel\">Số dư khả dụng</td>";
	print "<td>$acc->balance</td>";
	print "<td class=\"tdlabel\">Ngày thực hiện giao dịch gần nhất</td>";
	print "<td>28/11/10</td></tr>";

	print "<tr>";	
	print "<td class=\"tdlabel\">Hạn mức thấu chi</td>";
	print "<td>0 VND</td>";
	print "<td class=\"tdlabel\">Lãi suất</td>";
	print "<td>3.00% /năm</td>";
	print "</tr>";
	
	
	print "<tr>";
	print "<td class=\"tdlabel\">Số tiền khoanh giữ</td>";
	print "<td>0 VND</td>";
	print "<td class=\"tdlabel\">Lãi cộng dồn</td>";
	print "<td>270 VND</td>";
	print "</tr>";

	print "<tr>";
	print "<td class=\"tdlabel\">Lãi thấu chi</td>";
	print "<td>0 VND</td>";
	print "<td class=\"tdlabel\"></td>";
	print "<td></td>";
	print "</tr>";
		
	print "</table>";
//	<!--/Chi tiết TK DD-->

//<!--/Transaction detail by date-->
?>
</body>
</html>
