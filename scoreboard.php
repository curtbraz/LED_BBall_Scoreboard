<?php


// Accept Scoreboard Input
if(isset($_REQUEST['red'])){$red = $_REQUEST['red'];}
if(isset($_REQUEST['blue'])){$blue = $_REQUEST['blue'];}
if(isset($_REQUEST['redname'])){$redname = $_REQUEST['redname'];} else {$redname = "Red";}
if(isset($_REQUEST['bluename'])){$bluename = $_REQUEST['bluename'];} else {$bluename = "Blue";}

$padding = "";

$signmessage = $redname."-".$red.$blue."-".$bluename;

$length = strlen($signmessage);

$padding = 14 - $length;

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

$signmessage = $redname." ".$red.$padding.$bluename." ".$blue;

if($red != "0" || $blue != "0"){

$boom = 'sudo ./boom.pl';
exec($boom);

sleep(2);

}

$cmd = 'sudo ./led.pl "'.$signmessage.'"';
exec($cmd,$output);

//var_dump($output);

?>
