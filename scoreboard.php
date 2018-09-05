<?php


// Accept Scoreboard Input
if(isset($_REQUEST['red'])){$red = $_REQUEST['red'];}
if(isset($_REQUEST['blue'])){$blue = $_REQUEST['blue'];}

$padding = "";

$signmessage = "Red ".$red."Blue ".$blue;

$length = strlen($signmessage);

$padding = 16 - $length;

if($padding == 1){$padding = " ";}
if($padding == 2){$padding = "  ";}
if($padding == 3){$padding = "   ";}
if($padding == 4){$padding = "    ";}
if($padding == 5){$padding = "     ";}
if($padding == 6){$padding = "      ";}
if($padding == 7){$padding = "       ";}
if($padding == 8){$padding = "        ";}
if($padding == 9){$padding = "         ";}
if($padding == 10){$padding = "          ";}
if($padding == 11){$padding = "           ";}
if($padding == 12){$padding = "            ";}
if($padding == 13){$padding = "             ";}
if($padding == 14){$padding = "              ";}
if($padding == 15){$padding = "               ";}
if($padding == 16){$padding = "                ";}

$signmessage = "Red ".$red.$padding."Blue ".$blue;

$cmd = 'sudo ./led.pl "'.$signmessage.'"';
exec($cmd,$output);

//var_dump($output);

?>
