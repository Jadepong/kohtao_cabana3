<?
@ini_set('display_errors','0');

$host="localhost";
$user="kohtaocabana";
$pw="ktcbn2005";
$dbname="kohtaocabana";
$objConnect = mysql_connect($host,$user,$pw) or die("Error Connect to Database");
$objDB = mysql_select_db("$dbname");
mysql_query("SET NAMES UTF8");
mysql_set_charset('utf8_general_ci');


?>

