<?php

// Accept Scoreboard Input
if(isset($_REQUEST['red'])){$red = $_REQUEST['red'];}
if(isset($_REQUEST['blue'])){$blue = $_REQUEST['blue'];}

$signmessage = "Red ".$red."  "."Blue ".$blue;

$cmd = './led.pl "'.$signmessage.'"';
exec($cmd,$output);

var_dump($output);

?>
