<?php
include_once("./classes/Mammal.php");
include_once("./classes/Human.php");
include_once("./classes/Whale.php");

$myHuman = new Human(68.2, 1.80, false, "Bobby", "Dee");
$myHuman->getAllInfos();

$myWhale = new Whale(13.2, 168, true, "Thin");
$myWhale->getAllInfos();

$myHuman->move();
$myWhale->move();
echo PHP_EOL;
$myHuman->communicate();
$myWhale->communicate();
echo PHP_EOL;
$myHuman->reproduce();
$myWhale->reproduce();
echo PHP_EOL;
$myHuman->breastFeed();
$myWhale->breastFeed();
echo PHP_EOL;
