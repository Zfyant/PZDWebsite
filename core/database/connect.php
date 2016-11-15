<?php 

$connect = mysql_connect('localhost', 'root', 'myzeus') or die ("No Connection Made..");
mysql_select_db('pzd') or die ("Could Not Find That Database..");

$root = "http://localhost/PZD/";
$php_root = $_SERVER['DOCUMENT_ROOT'] . "PZD/";

		
?>