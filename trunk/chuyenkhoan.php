<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cart</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="css/chuyenkhoan.css" />
</head>
<body>
<form method="post">
<table class="tbllisting hasborder" width="100%" border="1">
	<caption>Chuyển khoản</caption>

	<tr>

		<td class="tdlabel"><label
			for="ctl00_Content_Transfer_Control_AccountList"
			id="ctl00_Content_Transfer_Control_DebitAccountLabel">Tài khoản trích
		nợ</label></td>

		<td><select name="ctl00$Content$Transfer_Control$AccountList"
			id="ctl00_Content_Transfer_Control_AccountList" class="slt_med">

			<option value="0361001789387">0361001789387</option>



		</select></td>

	</tr>

	<tr>

		<td class="tdlabel"><label for="ctl00_Content_Transfer_Control_TKP"
			id="ctl00_Content_Transfer_Control_CreditAccountLabel">Tài khoản ghi
		có</label></td>

		<td><input name="ctl00$Content$Transfer_Control$TKP" type="text"
			maxlength="13" id="ctl00_Content_Transfer_Control_TKP" /> <span
			id="ctl00_Content_Transfer_Control_CreditAccountRequiredValidator"
			style="color: Red; display: none;">*</span> <span
			id="ctl00_Content_Transfer_Control_CreditAccountValidator"
			style="color: Red; display: none;">Số tài khoản không hợp lệ!</span>

		</td>

	</tr>

	<tr>

		<td class="tdlabel"><label
			for="ctl00_Content_Transfer_Control_AmountText"
			id="ctl00_Content_Transfer_Control_AmountLabel">Số tiền</label></td>

		<td><input name="ctl00$Content$Transfer_Control$AmountText"
			type="text" maxlength="18"
			id="ctl00_Content_Transfer_Control_AmountText" /> <span
			id="ctl00_Content_Transfer_Control_AmountRequiredValidator"
			style="color: Red; display: none;">*</span></td>

	</tr>

	<tr>

		<td class="tdlabel"><label
			for="ctl00_Content_Transfer_Control_ListFee"
			id="ctl00_Content_Transfer_Control_ChargeLabel">Phí</label></td>

		<td><select name="ctl00$Content$Transfer_Control$ListFee"
			id="ctl00_Content_Transfer_Control_ListFee">

			<option selected="selected" value="2">Ph&#237; người chuyển trả</option>

			<option value="1">Ph&#237; người hưởng trả</option>



		</select></td>

	</tr>

	<tr>

		<td class="tdlabel"><label
			for="ctl00_Content_Transfer_Control_TransferContent"
			id="ctl00_Content_Transfer_Control_ContentLabel">Nội dung thanh toán</label>

		</td>

		<td><input name="ctl00$Content$Transfer_Control$TransferContent"
			type="text" maxlength="117" size="50"
			id="ctl00_Content_Transfer_Control_TransferContent"
			style="width: 350px;" /><br />

		<span id="ctl00_Content_Transfer_Control_ContentValidator"
			style="color: Red; display: none;">Đề nghị quý khách sử dụng tiếng
		Việt không dấu!</span></td>

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
