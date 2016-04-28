<?php

require './controller/CoffeeController.php';
$title = "Sellers";
session_start();
$coffeeController = new CoffeeController();

$seller = $_SESSION['user'];

$content = ' ';

$content .= $coffeeController->showSellerInventory($seller);

$content .= "<a href='createInventory.php' class='track-event'>Post Product</a>";


include 'Template.php';