<?php
/*
$host = "localhost";
$user = "cp593955_abs";
$pw = "Absmediq@9";
$dbname = "cp593955_bkk2022";
$objConnect = mysqli_connect($host,$user,$pw) or die("Error Connect to Database");
$objDB = mysqli_select_db("$dbname");
mysqli_query("SET NAMES UTF8");
*/

$mysqli = new mysqli("localhost","kohtaocabana","ktcbn2005","kohtaocabana");
$mysqli -> set_charset("utf8");
?>