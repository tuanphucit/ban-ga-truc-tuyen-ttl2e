<?php

include_once dirname(__FILE__)."../classes/DB.php";

$db = new DB();

$query = "INSERT INTO `bank`.`customer` (`id_customer`, `name`, `address`, `email`, `phone`, `indentity_number`, `password`) VALUES (NULL, 'luckymancvp', 'ha noi', 'luckymancvp@gmail.com', '098732198', '8907', '2e');";
$db->runQuery($query);
echo "fuck you";
?>