<?php
include_once("./classes/Mammal.php");
include_once("./classes/Human.php");
include_once("./classes/Whale.php");

$myHuman = new Human(68.2, 1.80, false, "Bobby", "Dee");
$myHuman->getAllInfos();

$myHuman->move();
$myHuman->communicate();
$myHuman->reproduce();
$myHuman->breastFeed();

echo PHP_EOL;

$myWhale = new Whale(13.2, 168, true, "Thin");
$myWhale->getAllInfos();

$myWhale->move();
$myWhale->communicate();
$myWhale->reproduce();
$myWhale->breastFeed();
