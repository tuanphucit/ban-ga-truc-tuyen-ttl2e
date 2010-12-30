<?php

// REQUIRED SETTINGS

// THE HTML NAME ATTRIBUTES USED IN YOUR ADD-TO-CART FORM
$jcart['item_id']		= 'my-item-id';			// ITEM ID
$jcart['item_name']		= 'my-item-name';		// ITEM NAME
$jcart['item_price']	= 'my-item-price';		// ITEM PRICE
$jcart['item_qty']		= 'my-item-qty';		// ITEM QTY
$jcart['item_add']		= 'my-add-button';		// ADD-TO-CART BUTTON
$jcart['bank_number']   = '267794161';

$jcart['paypal_id']		= '3';
$jcart['secure_number'] = '41';

// PATH TO THE DIRECTORY CONTAINING JCART FILES
$jcart['path'] = '/cart/jcart/';

///////////////////////////////////////////////////////////////////////
// OPTIONAL SETTINGS

// OVERRIDE DEFAULT CART TEXT
$jcart['text']['cart_title']				= 'Giỏ hàng';		// Shopping Cart
$jcart['text']['single_item']				= 'Sản phẩm';		// Item
$jcart['text']['multiple_items']			= 'Sản phẩm';		// Items
$jcart['text']['currency_symbol']			= '';		// $
$jcart['text']['subtotal']					= 'Tổng tiền';		// Subtotal

$jcart['text']['update_button']				= 'Cập nhật';		// update
$jcart['text']['checkout_button']			= 'Thanh toán';		// checkout
$jcart['text']['remove_link']				= 'Xóa';		// remove
$jcart['text']['empty_button']				= 'Xóa tất cả';		// empty
$jcart['text']['empty_message']				= 'Giỏ hàng trống';		// Your cart is empty!
$jcart['text']['item_added_message']		= 'Đã thêm vào giỏ';		// Item added!

$jcart['text']['price_error']				= 'Giá tiền không hợp lệ';		// Invalid price format!
$jcart['text']['quantity_error']			= 'Số lượng không hợp lệ';		// Item quantities must be whole numbers!
$jcart['text']['checkout_error']			= 'Đơn hàng không được xác nhận';		// Your order could not be processed!

// OVERRIDE THE DEFAULT BUTTONS WITH YOUR IMAGES BY SETTING THE PATH FOR EACH IMAGE
$jcart['button']['checkout']				= '';
$jcart['button']['update']					= '';
$jcart['button']['empty']					= '';

// ADD A UNIQUE TOKEN TO FORM POSTS TO PREVENT CSRF EXPLOITS
// LEARN MORE: http://conceptlogic.com/jcart/csrf/
$jcart['csrf_token']                        = false;

?>
