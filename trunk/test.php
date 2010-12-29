<?php

include_once dirname(__FILE__)."../config/include.inc.php";

$order = new Order();
Order::addNewOrder("Buy 3 thing", "0", "1", "2", "200");

?>