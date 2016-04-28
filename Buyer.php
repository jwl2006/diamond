<?php

session_start();
require './controller/loginControl.php';

$title = "Buyer Info";
$login = new loginControl();
$coffeeController = new CoffeeController();
$content = '';



if(isset( $_SESSION['user'])) {
    $username = $_SESSION['user'];
    $buyerTable = $coffeeController->CreateBuyerTable($username);
    $content .= $buyerTable;
//    $login->redirectTo('Diamond.php','0');
    
    $orderhistory = $coffeeController->findOrderHistory($username);
    $content .= $orderhistory;
    
} else {
    $login->redirectTo('401.php','0');
}

$content .= "<a href='Diamond.php' class='track-event'><button>Order</button></a>";

include 'Template.php';

