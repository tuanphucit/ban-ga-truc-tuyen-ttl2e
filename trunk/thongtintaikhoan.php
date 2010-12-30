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
	href="css/thongtintaikhoan.css" />
</head>
<body>

<?php
include_once dirname ( __FILE__ ) . "../config/include.inc.php";
$account = new Account ();
?>

<div id="pagecontents">

<h2>Chi tiết giao dịch</h2>

<form name="aspnetForm" method="post"
	action="TransactionDetail.aspx?AID=250191AA76E1D939ADFAAB262C9BECA7CEB504E35CDD181EF20E812ED14EA790"
	id="aspnetForm">

<div><input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
	value="/wEPDwUJOTU4NDczMjQ4D2QWAmYPZBYIAgMPZBYCAgMPZBYEAgIPZBYCZg8PFgIeC05hdmlnYXRlVXJsBXYvSUJhbmtpbmcvQWNjb3VudHMvVHJhbnNhY3Rpb25EZXRhaWwuYXNweD9BSUQ9MjUwMTkxQUE3NkUxRDkzOUFERkFBQjI2MkM5QkVDQTdDRUI1MDRFMzVDREQxODFFRjIwRTgxMkVEMTRFQTc5MCZsYW5nPWVuZGQCBA8WAh4LXyFJdGVtQ291bnQCAxYGAgEPZBYCAgEPDxYEHgRUZXh0BRPEkOG7lWkgbeG6rXQga2jhuql1HwAFHX4vU3VwcG9ydC9DaGFuZ2VQYXNzd29yZC5hc3B4ZGQCAw9kFgICAQ8PFgQfAgUaSMaw4bubbmcgZOG6q24gc+G7rSBk4bulbmcfAAVnaHR0cDovL3d3dy52aWV0Y29tYmFuay5jb20udm4vRUJhbmtpbmcvUmVnX0Zvcm1zL0h1b25nJTIwZGFuJTIwc3UlMjBkdW5nJTIwZGljaCUyMHZ1JTIwVkNCLWlCQG5raW5nLnBkZmRkAgUPZBYCAgEPDxYEHwIFBlRob8OhdB8ABRV+L1N1cHBvcnQvTG9nb3V0LmFzcHhkZAIFD2QWBAIFD2QWAmYPDxYCHgdWaXNpYmxlaGRkAgkPZBYCZg8PFgIfA2hkZAIHD2QWAgIBD2QWAgIDD2QWFmYPEGQQFQENMDM2MTAwMTc4OTM4NxUBQDI1MDE5MUFBNzZFMUQ5MzlBREZBQUIyNjJDOUJFQ0E3Q0VCNTA0RTM1Q0REMTgxRUYyMEU4MTJFRDE0RUE3OTAUKwMBZ2RkAgIPDxYCHwJlZGQCBQ8WAh8CBQ1EQU5HIFRIQU5IIFRVZAIHDxYCHwIFBzQzNDE0ODRkAgkPFgIfAgUfSFVPTkcgQ0FOSCxCSU5IIFhVWUVOLFZJTkggUEhVQ2QCCw8WAh8CBQkxMzUzMjQzNTlkAg0PFgIfAgUNMDM2MTAwMTc4OTM4N2QCDw8WAh8CBQNWTkRkAhAPFgIfAgVATG/huqFpIHTDoGkga2hv4bqjbjogVMOgaSBraG/huqNuIHRp4buBbiBn4butaSBraMO0bmcga+G7syBo4bqhbmQCEQ9kFgJmD2QWEgIDDxYCHwIFCjc3LDM3MSBWTkRkAgcPFgIfAgUIMDIvMDQvMTBkAgsPFgIfAgUKNzcsMzcxIFZORGQCDw8WAh8CBQgyOC8xMS8xMGQCEw8WAh8CBQUwIFZORGQCFw8WAh8CBQszLjAwJSAvbsSDbWQCGw8WAh8CBQUwIFZORGQCHw8WAh8CBQcyNzAgVk5EZAIjDxYCHwIFBTAgVk5EZAITDw8WAh8DaGRkAgkPZBYCZg9kFgICAg8WAh8BAgIWBAIBD2QWAgIBDw8WBB8CBRvEkGnhu4F1IGtob+G6o24gc+G7rSBk4bulbmcfAAUgfi9Eb2N1bWVudHMvSG9wIGRvbmcgRFYgTkhEVC5wZGZkZAICD2QWAgIBDw8WBB8CBQpMacOqbiBo4buHHwAFFn4vU3VwcG9ydC9Db250YWN0LmFzcHhkZBgCBTpjdGwwMCRDb250ZW50JFRyYW5zYWN0aW9uRGV0YWlsJFRyYW5zYWN0aW9uX0RldGFpbF9CeV9EYXRlD2dkBSljdGwwMCRDb250ZW50JFRyYW5zYWN0aW9uRGV0YWlsJE11bHRpVmlldw8PZGZkj/0+RxyKrratxs77EK5osZBGefU=" />

</div>



<div><input type="hidden" name="__EVENTVALIDATION"
	id="__EVENTVALIDATION"
	value="/wEWBgKvlbuWDQKl3af7BAK215TvAQKGt5RtAra11ocOAt+u+cYEvEkasrjJH1PKbLA7bUESfS+NDDs=" />

</div>

<p class="align-left"><select
	name="ctl00$Content$TransactionDetail$ListAccounts"
	id="ctl00_Content_TransactionDetail_ListAccounts" class="slt_med">

	<option selected="selected"
		value="250191AA76E1D939ADFAAB262C9BECA7CEB504E35CDD181EF20E812ED14EA790">0361001789387</option>



</select> <input type="submit"
	name="ctl00$Content$TransactionDetail$Submit" value="Xem chi tiết"
	id="ctl00_Content_TransactionDetail_Submit" class="btn" /></p>

<span id="ctl00_Content_TransactionDetail_Lbl_Warning" class="Warning1"></span>

<table class="tbllisting hasborder" border="1">

	<caption>Thông tin tài khoản</caption>

	<tr>

		<td class="tdlabel" width="20%">Tên tài khoản</td>

		<td width="30%">DANG THANH TU</td>

		<td class="tdlabel" width="25%">Số CIF</td>

		<td width="20%">4341484</td>

	</tr>

	<tr>

		<td class="tdlabel">Địa chỉ</td>

		<td>HUONG CANH,BINH XUYEN,VINH PHUC</td>

		<td class="tdlabel">Số CMND/Hộ chiếu</td>

		<td>135324359</td>

	</tr>

	<tr>

		<td class="tdlabel">Số tài khoản</td>

		<td>0361001789387</td>

		<td class="tdlabel">Loại tiền</td>

		<td>VND</td>

	</tr>

	<tr>

		<td colspan="4" class="Account_Inform1">Loại tài khoản: Tài khoản tiền
		gửi không kỳ hạn</td>

	</tr>





	<!--Chi tiết TK DD-->

	<tr>

		<td class="tdlabel">Số dư hiện tại</td>

		<td>77,371 VND</td>

		<td class="tdlabel">Ngày mở tài khoản</td>

		<td>02/04/10</td>

	</tr>

	<tr>

		<td class="tdlabel">Số dư khả dụng</td>

		<td>77,371 VND</td>

		<td class="tdlabel">Ngày thực hiện giao dịch gần nhất</td>

		<td>28/11/10</td>

	</tr>

	<tr>

		<td class="tdlabel">Hạn mức thấu chi</td>

		<td>0 VND</td>

		<td class="tdlabel">Lãi suất</td>

		<td>3.00% /năm</td>

	</tr>

	<tr>

		<td class="tdlabel">Số tiền khoanh giữ</td>

		<td>0 VND</td>

		<td class="tdlabel">Lãi cộng dồn</td>

		<td>270 VND</td>

	</tr>

	<tr>

		<td class="tdlabel">Lãi thấu chi</td>

		<td>0 VND</td>

		<td class="tdlabel"></td>

		<td></td>

	</tr>

	<!--/Chi tiết TK DD-->

</table>



<!--Transaction detail by date-->

<table class="tbllisting">

	<caption>Chi tiết giao dịch</caption>

	<tr>

		<td width="100px"></td>

		<td align="right" style="padding-right: 10pt">

		<div>Từ ngày <input name="date1" type="text" id="date1"
			style="width: 100px;" /> <script type="text/javascript">

                // <![CDATA[

                $(document).ready(function() {

                    $('#date1').datepicker({ dateFormat: 'dd-mm-yy' });

                });

                // ]]>

                </script> Đến ngày <input
			name="date2" type="text"
			id="date2" style="width: 100px;" />

		<script type="text/javascript">

                // <![CDATA[

                $(document).ready(function() {

                    $('#date2').datepicker({ dateFormat: 'dd-mm-yy' });

                });

                // ]]>

                </script> <input type="submit"
			name="ctl00$Content$TransactionDetail$TransByDate" value="Xem sao kê"
			id="ctl00_Content_TransactionDetail_TransByDate" class="btn" /> <br />

		<span id="ctl00_Content_TransactionDetail_Lbl_Warning_TTD"
			class="Warning1"></span></div>

		</td>
	</tr>



	<tr>

		<td colspan="2">



		<div id="ctl00_Content_TransactionDetail_Pn_TransDetailByDate"
			class="View_Transaction_Frame" style="width: 100%;">



		<div></div>



		</div>

		</td>

	</tr>

</table>



<!--/Transaction detail by date--></form>



</div>







</div>


</body>
</html>
