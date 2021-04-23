<?php

require_once "Wash.php";
require_once "Pant.php";
require_once "Shirt.php";

$pant = new Pants;
$shirt = new Shirt;
$action = new Washer;
$action->dowash($pant);
$action->dowash($shirt);



?>