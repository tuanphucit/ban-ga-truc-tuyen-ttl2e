<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chuyển khoản</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="css/chuyenkhoan.css" />
</head>
<body>

<?php 
	include_once dirname(__FILE__)."../config/include.inc.php";
	session_start();
	$customerID = $_SESSION['user'];
		if (!isset($customerID)){
			echo "<a href='login.php'>Click here to login</a>";
			return;
		}
	$account = new Account($customerID,0);
	$account_number = $account->account_number;
	$balance        = $account->balance;
	$customer       = new Customer();
	$customer->getInfo($customerID,0);
	
?>
<form method="post">
<table class="tbllisting hasborder" width="100%" border="1">
	<caption>Chuyển khoản</caption>

	<tr>

		<td class="tdlabel"><label>Tài khoản trích nợ</label></td>

		<td><select>
			<option value="<?php echo $account_number;?>"><?php echo $account_number;?></option>
		</select></td>

	</tr>

	<tr>

		<td class="tdlabel"><label>Tài khoản ghi có</label></td>

		<td><input name="taikhoanghi" type="text"
			maxlength="13" /> 
		<span style="color: Red; display: none;">*</span> 
		<span	style="color: Red; display: none;">Số tài khoản không hợp lệ!</span>

		</td>

	</tr>

	<tr>

		<td class="tdlabel"><label>Số tiền</label></td>

		<td><input name="amount" type="text" maxlength="18" /> 
			<span style="color: Red; display: none;">*</span></td>

	</tr>

	<tr>

		<td class="tdlabel"><label>Phí</label></td>

		<td><select name="phi">

			<option selected="selected" value="2">Ph&#237; người chuyển trả</option>

			<option value="1">Ph&#237; người hưởng trả</option>

		</select></td>

	</tr>

	<tr>

		<td class="tdlabel"><label>Nội dung thanh toán</label>

		</td>

		<td><input name="noidung"
			type="text" maxlength="117" size="50"
			style="width: 350px;" /><br />

		<span style="color: Red; display: none;">Đề nghị quý khách sử dụng tiếng Việt không dấu!</span></td>

	</tr>

	<tr>

		<td class="tdlabel" style="vertical-align: top">Chú ý</td>

		<td>

		<ul class="squareList">

			<li><b>Tài khoản trích nợ:</b> không áp dụng cho tài khoản đồng sở
			hữu</li>

			<li><b>Tài khoản ghi có:</b> không áp dụng cho các tài khoản sau:

			<ul class="discList" style="margin-left: 1em">

				<li>Khách hàng tổ chức đăng kí nhận báo có online</li>

				<li>Tài khoản của tổ chức tín dụng</li>

				<li>Tài khoản ngoại tệ</li>

				<li>Tài khoản của người nước ngoài không cư trú</li>

			</ul>

			</li>

		</ul>



		</td>

	</tr>

	<tr>

		<td colspan="2"><span id="ctl00_Content_Transfer_Control_MessageLabel"
			class="Warning1"></span></td>

	</tr>

	<tr>

		<td colspan="2"><input type="submit" value="Xác nhận"class="btn" /></td>

	</tr>
</table>
</form>

</body>
</html>
