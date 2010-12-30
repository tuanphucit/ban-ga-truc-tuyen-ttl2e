<?php

// INCLUDE JCART BEFORE SESSION START
include 'jcart/jcart.php';

// START SESSION
session_start();

// INITIALIZE JCART AFTER SESSION START
$cart =& $_SESSION['jcart']; if(!is_object($cart)) $cart = new jcart();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gas Store</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" type="text/css" media="screen, projection" href="css/jcart.css" />
  <script type="text/javascript" src="js/keyboard.js" charset="UTF-8"></script>
  <script type="text/javascript">var _siteRoot='store.php',_root='store.php';</script>
  <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
 
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
					<h1><a href="index.php" id="logo">eTeam</a><span id="slogan">Gas Store</span></h1>
					<nav>
						<ul id="top_nav">
							<li><a href="index.php"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="contact.php"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="about.html"><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
				</div>
				<div style="margin-top:-30px">
					<nav>
						<ul id="menu">
							<li class="nav1" id="menu_active"><a href="sore.php">Trang chủ</a></li>
							<li class="nav2"><a href="#">Bếp ga </a></li>
							<li class="nav3"><a href="#">Bình ga</a></li>
							<li class="nav4"><a href="#">Máy hút mùi </a></li>
							<li class="nav5"><a href="#">Máy lọc nước</a></li>
							<li class="nav6"><a href="#">Liên hệ </a></li>
						</ul>
					</nav>
				</div>	
					 <div id="slide-holder">
						 <div id="slide-runner">
							<a href=""><img id="slide-img-1" src="images/1.jpg" class="slide" alt="" /></a>
							<a href=""><img id="slide-img-2" src="images/2.jpg" class="slide" alt="" /></a>
							<a href=""><img id="slide-img-3" src="images/3.jpg" class="slide" alt="" /></a>
							<a href=""><img id="slide-img-4" src="images/4.jpg" class="slide" alt="" /></a>
						  <div id="slide-controls">
								<p id="slide-nav"></p>
						  </div>
						</div>
					</div>
					   <!--content featured gallery here -->
						<script type="text/javascript">
						if(!window.slider) var slider={};slider.data=[{"id":"slide-img-1","client":"","desc":""},{"id":"slide-img-2","client":"","desc":""},{"id":"slide-img-3","client":"","desc":""},{"id":"slide-img-4","client":"","desc":""}];
						</script>
				
			</header>
			<!--header end-->
			<!--content -->
			<section id="content">
				<article class="col1" style="width:670px">
					
					<div id="content">

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="my-item-id" value="1" />
						<input type="hidden" name="my-item-name" value="B01" />
						<input type="hidden" name="my-item-price" value="25.00" />

						<ul>
							<li><strong>Bếp ga Sun (B01)</strong></li>
							<li>Giá: $25.00</li>
							<li>
								<label>Số lượng: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>
						<img src="images/b01.jpg" alt="B01" class="product"/>
						<input type="submit" name="my-add-button" value="Mua" class="button" />
					</fieldset>
				</form>

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="my-item-id" value="2" />
						<input type="hidden" name="my-item-name" value="K01" />
						<input type="hidden" name="my-item-price" value="19.50" />

						<ul>
							<li><strong>máy lọc nước RO (K01)</strong></li>
							<li>Giá: $19.50</li>
							<li>
								<label>Số lượng: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>
						<img src="images/k01.jpg" alt="K01" class="product"/>
						<input type="submit" name="my-add-button" value="Mua" class="button" />
					</fieldset>
				</form>

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="my-item-id" value="3" />
						<input type="hidden" name="my-item-name" value="G02" />
						<input type="hidden" name="my-item-price" value="33.25" />

						<ul>
							<li><strong>Bình ga Petrolimex (G02)</strong></li>
							<li>Giá: $33.25</li>
							<li>
								<label>Số lượng: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>
						<img src="images/G02.jpg" alt="G02" class="product"/>

						<input type="submit" name="my-add-button" value="Mua" class="button" />
					</fieldset>
				</form>
				
				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="my-item-id" value="4" />
						<input type="hidden" name="my-item-name" value="M03" />
						<input type="hidden" name="my-item-price" value="12" />

						<ul>
							<li><strong>Máy hút mùi(M03)</strong></li>
							<li>Giá: $12</li>
							<li>
								<label>Số lượng: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>
						<img src="images/m03.jpg" alt="M03" class="product"/>
						<input type="submit" name="my-add-button" value="Mua" class="button" />
					</fieldset>
				</form>

				<div class="clear"></div>
			</div>
			
        		</article>
				<article class="col2"  style="width:270px;float:left">
					<div id="sidebar">
						<?php $cart->display_cart($jcart);?>
					</div>
					
					<div class="widget">
					
					<h3>Liên hệ</h3>
						<div class="content">
						<ul>
							<li>Address: 1 Đại Cồ Việt - Hà Nội</li>
							<li>Phone: (043)12345678 </li>
							<li>Mail to: <a href="mailto:loc8meng2@gmail.com">Admin</a></li>
							<li>Online help: <a href=”ymsgr:sendIM?loc8meng2“><img align="top" border=0 height="35px" src=http://opi.yahoo.com/online?u=loc8meng2;&m=g&t=2 /></a> </li>
						
						</ul>
						</div>
					</div>
					
        		</article>
				
			</section>
		</div>
</div>
</div>
<div class="body3">
<div class="body4">
		<div class="main">
			<section id="content2">
				<article class="col3 pad_left1">
					<h3>Nhanh chóng</h3>
					<figure class="pad_bot1"><img src="images/page1_img3.jpg" alt=""></figure>
					<p class="pad_bot2">
							Praesent vestibulum molestie lacenean nonummy hendrerit mauri asefporaum sociis penatibus natoque.</p>
					
        		</article>
				<article class="col3 pad_left2">
					<h3>Chất lượng</h3>
					<figure class="pad_bot1"><img src="images/page1_img4.jpg" alt=""></figure>
					<p class="pad_bot2">
							Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					
        		</article>
				<article class="col3 pad_left2">
					<h3>Giá tốt</h3>
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
				<a href="http://www.eteamvn.com/" target="_blank">eTeamvn Gas Store</a> designed by <a href="http://loc8meng2.info" target="_blank">Loc8meng2</a> &copy 2010 <br>
			</footer>
			<!--footer end-->
		</div>
		<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
		<script type="text/javascript" src="jcart/jcart-javascript.min.php"></script>
</body>
</html>