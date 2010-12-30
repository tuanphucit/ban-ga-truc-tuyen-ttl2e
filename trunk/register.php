<?php
	require_once("validation.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/general.css" type="text/css" media="screen" />
 
 
  <!--[if lt IE 9]>
    <script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
  	<script type="text/javascript" src="js/html5.js"></script>
  <![endif]-->

</head>

<body id="page1">
<div class="body1">
<div class="body2">
		<div class="main">
			<!--header -->
			<header>
				<div class="wrapper">
					<h1><a href="index.html" id="logo">eTeam</a><span id="slogan">Payment Gateway</span></h1>
					<nav>
						<ul id="top_nav">
							<li><a href="index.php"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="contact.php"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="about.html"><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
				</div>
				
			</header>
			<!--header end-->
			<!--content -->
			<section id="content">
					<div id="container">
								<h1>Đăng kí tài khoản mới</h1><br><br><br>
					<?if( isset($_POST['send']) && (!validateName($_POST['name']) || !validateEmail($_POST['email']) || !validatePasswords($_POST['pass1'], $_POST['pass2']) || !validateMessage($_POST['message']) ) ):?>
							<div id="error">
								<ul>
									<?if(!validateName($_POST['name'])):?>
										<li><strong>Tên chưa đúng: </strong> Tên phải gồm 3 kí tự trở lên</li>
								    <?endif?>
								    <?if(!validateEmail($_POST['email'])):?>
										<li><strong>E-mail chưa đúng: </strong> xem lại định dạng</li>
								    <?endif?>
									<?if(!validatePasswords($_POST['pass1'], $_POST['pass2'])):?>
										<li><strong>Mật khẩu chưa đúng: </strong> 2 mật khẩu của bạn không trùng nhau!</li>
									<?endif?>
									<?if(!validatePhone($_POST['phone'])):?>
										<li><strong>Số điện thoại chưa đúng: </strong> Phải gồm 10 chữ số trở lên</li>
								    <?endif?>
									<?if(!validateInden($_POST['inden'])):?>
										<li><strong>Số CMT chưa đúng: </strong> CMT chỉ gồm 9 chứ số</li>
								    <?endif?>
									
								</ul>
							</div>
						<?elseif(isset($_POST['send'])):?>
							<div id="error" class="valid">
								<ul>
									<li><strong>Chúc mừng !</strong> Bạn đã tạo tài khoản thành công</li>
								</ul>
							</div>
					<?endif?>

					<form method="post" id="customForm" action="">
						<div>
							<label for="name">Họ tên</label>
							<input id="nameInfo" name="name" type="text" />
						</div>
						<div>
							<label for="email">E-mail</label>
							<input id="email" name="email" type="text" />
							<span id="emailInfo">Email dùng để đăng nhập</span>
						</div>
						<div>
							<label for="pass1">Mật khẩu</label>
							<input id="pass1" name="pass1" type="password" />
							<span id="pass1Info">Ít nhất 5 kí tự: chữ, số & '_'</span>
						</div>
						<div>
							<label for="pass2">Xác nhận lại mật khẩu</label>
							<input id="pass2" name="pass2" type="password" />
							<span id="pass2Info">Nhập lại mật khẩu</span>
						</div>
						<div>
							<label for="inden">CMTND</label>
							<input id="inden" name="inden" type="text" />
							<span id="indenInfo"></span>
						</div>
						<div>
							<label for="address">Địa chỉ</label>
							<input id="address" name="address" type="text" />
							<span id="addressInfo"></span>
						</div>
						<div>
							<label for="phone">Số điện thoại</label>
							<input id="phone" name="phone" type="text" />
							<span id="phoneInfo"></span>
						</div>
						<div>
							<input id="send" name="send" type="submit" value="Đăng kí" />
						</div>
					</form>
					</div>
<?php 
	include_once dirname ( __FILE__ ) . "../config/include.inc.php";
	$name = $_POST['name'];
	$pass = $_POST['pass1'];
	$re_pass = $_POST['pass2'];
	$inden = $_POST['inden'];
	$addr = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	$db = new DB();
	$sql = "select * from customer where indentity_number ='$inden'";
	$result = $db->runQuery($sql);
	if(mysql_num_rows($result)!=""){
		echo "Tài khoản này đã tồn tại<br />";
		}
	else 
	{
		$cus = new Customer();
		$cus->addUser($name, $addr, $email, $phone, $inden, $pass);
		//echo "Tạo tài khoản mới thành công <br />";
	}
?>
			</section>
		</div>
</div>
</div>
<div class="body3">
<div class="body4">
		<div class="main">
			<section id="content2">
				<article class="col3 pad_left1">
					<h3>An toàn</h3>
					<figure class="pad_bot1"><img src="images/page1_img3.jpg" alt=""></figure>
					<p class="pad_bot2">
							Praesent vestibulum molestie lacenean nonummy hendrerit mauri asefporaum sociis penatibus natoque.</p>
					
        		</article>
				<article class="col3 pad_left2">
					<h3>Dễ dàng </h3>
					<figure class="pad_bot1"><img src="images/page1_img4.jpg" alt=""></figure>
					<p class="pad_bot2">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					
        		</article>
				<article class="col3 pad_left2">
					<h3>Tuận tiện</h3>
					<figure class="pad_bot1"><img src="images/page1_img5.jpg" alt=""></figure>
					<p class="pad_bot2">
							Nemo enim ipsam voluptatem voluptas sit aspernatur aut odit aut fugit, sedquia penatibus magnis.</p>
					
        		</article>
			</section>
		</div>
</div>
</div>
		<div class="main">
			<!--content end-->
			<!--footer -->
			<footer>
				<a href="http://www.eteamvn.com/" target="_blank">eTeamvn payment</a> designed by <a href="http://loc8meng2.info" target="_blank">Loc8meng2</a> &copy 2010 <br>
			</footer>
			<!--footer end-->
		</div>
	<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="js/validation.js"></script>
</body>
</html>