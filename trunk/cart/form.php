<?php
	require_once("validation.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Form Invoice</title>
	<link rel="stylesheet" href="css/general.css" type="text/css" media="screen" />
</head>
<body>
	<div id="container">
		<h1>Thông tin tài khoản </h1>
		
		<?if( isset($_POST['send']) && (!validateName($_POST['name']) || !validateEmail($_POST['email']) || !validatePasswords($_POST['pass1'], $_POST['pass2']) || !validateBank($_POST['bank']) ) ):?>
				<div id="error">
					<ul>
						<?if(!validateName($_POST['name'])):?>
							<li><strong>Tên chưa đúng:</strong> Tên phải gồm 3 kí tự trở lên</li>
						<?endif?>
						<?if(!validateEmail($_POST['email'])):?>
							<li><strong>E-mail chưa đúng:</strong> Email chưa đúng định dạng</li>
						<?endif?>
						<?if(!validatePasswords($_POST['pass1'], $_POST['pass2'])):?>
							<li><strong>Passwords chưa đúng:</strong> Passwords không trùng hoặc lỗi</li>
						<?endif?>
						<?if(!validateBank($_POST['bank'])):?>
							<li><strong>Số tài khoản chưa đúng:</strong> Số tài khoản phải gồm 10 kí tự</li>
						<?endif?>
					</ul>
				</div>
			<?elseif(isset($_POST['send'])):?>
				<div id="error" class="valid">
					<ul>
						<li><strong>Chúc mừng !</strong> bạn đã đặt hàng thành công</li>
					</ul>
				</div>
		<?endif?>

		<form method="post" id="customForm" action="jcart/jcart-gateway.php">
			<div>
				<label for="name">Name</label>
				<input id="name" name="name" type="text" />
				<span id="nameInfo">Họ tên quý khách</span>
			</div>
			<div>
				<label for="email">E-mail</label>
				<input id="email" name="email" type="text" />
				<span id="emailInfo">Email dùng để đăng nhập</span>
			</div>
			<div>
				<label for="pass1">Password</label>
				<input id="pass1" name="pass1" type="password" />
				<span id="pass1Info">Mật khẩu đăng nhập</span>
			</div>
			<div>
				<label for="pass2">Confirm Password</label>
				<input id="pass2" name="pass2" type="password" />
				<span id="pass2Info">Nhập lại mật khẩu</span>
			</div>
			<div>
				<label for="bank">Bank Account </label>
				<input id="bank" name="bank" type="text" />
				<span id="bankInfo">Tài khoản ngân hàng</span>
			</div>
			<div>
				<input id="send" name="send" type="submit" value="Send" />
			</div>
		</form>
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/validation.js"></script>
</body>
</html>