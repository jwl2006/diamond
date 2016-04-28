<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require './controller/loginControl.php';
//session_start();
$content = '';

$title = "Tranaction";

$productID = "1";
$quantity = "2";
$time = new DateTime();
$time = $time->setTimezone(new DateTimeZone('America/Los_Angeles'));
$time = date_format($time, 'Y-m-d H:i:s');

$buyer = "sun@yahoo.com";
$seller = "xuechen@sjsu.edu";

$login = new loginControl();


$productID = trim($productID);
$quantity = trim($quantity);


$buyer = trim($buyer);
$seller = trim($seller);

$content .= $login->transactionValidate($productID, $quantity, $time, $buyer, $seller);

include 'Template.php';