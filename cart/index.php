<?php

// INCLUDE JCART BEFORE SESSION START
include 'jcart/jcart.php';

// START SESSION
session_start();

// INITIALIZE JCART AFTER SESSION START
$cart =& $_SESSION['jcart']; if(!is_object($cart)) $cart = new jcart();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<title>Demo Gas Store</title>
	
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" media="screen, projection" href="css/jcart.css" />

	</head>
	<body>
		<div id="wrapper">
			<h2>Demo Gas Store</h2>

			<div id="sidebar">
				<?php $cart->display_cart($jcart);?>
			</div>

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

						<input type="submit" name="my-add-button" value="Mua" class="button" />
					</fieldset>
				</form>

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="my-item-id" value="2" />
						<input type="hidden" name="my-item-name" value="B02" />
						<input type="hidden" name="my-item-price" value="19.50" />

						<ul>
							<li><strong>Bếp từ Midea (B02)</strong></li>
							<li>Giá: $19.50</li>
							<li>
								<label>Số lượng: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="Mua" class="button" />
					</fieldset>
				</form>

				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="my-item-id" value="3" />
						<input type="hidden" name="my-item-name" value="G01" />
						<input type="hidden" name="my-item-price" value="33.25" />

						<ul>
							<li><strong>Bình ga Petrolimex (G01)</strong></li>
							<li>Giá: $33.25</li>
							<li>
								<label>Số lượng: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="Mua" class="button" />
					</fieldset>
				</form>
				
				<form method="post" action="" class="jcart">
					<fieldset>
						<input type="hidden" name="my-item-id" value="4" />
						<input type="hidden" name="my-item-name" value="G02" />
						<input type="hidden" name="my-item-price" value="12" />

						<ul>
							<li><strong>Bình ga du lịch (G02)</strong></li>
							<li>Giá: $12</li>
							<li>
								<label>Số lượng: <input type="text" name="my-item-qty" value="1" size="3" /></label>
							</li>
						</ul>

						<input type="submit" name="my-add-button" value="Mua" class="button" />
					</fieldset>
				</form>

				<div class="clear"></div>
			</div>
		</div>

		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="jcart/jcart-javascript.min.php"></script>
	</body>
</html>
