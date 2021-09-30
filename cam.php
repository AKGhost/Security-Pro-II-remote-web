<?php
//echo exec('whoami');
//error_reporting(E_ALL);
ini_set('display_errors', '1');
include "php_serial_class.php";

// create an instance of the class
$serial = new PhpSerial;

$serial->deviceSet("com1");
// We can change the baud rate, parity, length, stop bits, flow control
$serial->confBaudRate(1200);
$serial->confParity("none");
$serial->confCharacterLength(8);
$serial->confStopBits(1);
$serial->confFlowControl("none");

$serial->deviceOpen();

// To write into
//$byte1 = 0xFF;
//$byte2 = 0X55;
//$code = 9; 
$str1 = "\xff\x55\x09";
$serial->sendMessage($str1);
echo ($str1);
?>


