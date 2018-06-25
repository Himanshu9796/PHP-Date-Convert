# PHP-Date-Convert
# Date Convert Code use in PHP
<?php
////If Date is in Excel Serial Date Formate////

$date=42197;   //Date in Excel Serial Date formate

$serialDate = GetSerialToDate($date);

echo $serialDate;

function GetSerialToDate($date){
  ///////Excel SerialDate To Date Convert///////
    $DateAr = explode(".", $date);
    $DateN = $DateAr[0];
    $DecSec = "." . $DateAr[1];  //decimal amount of seconds
    $duration = 86400 * $DecSec;  //number of seconds in a day * decimal

    $dateTime = new DateTime("1899-12-30 + $DateN days");
    $date = $dateTime->format("Y-m-d") . " " . gmdate("H:i:s", $duration);

    return $date;
}
?>
