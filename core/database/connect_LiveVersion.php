<?php 

error_reporting(1);

$connect = mysql_connect("localhost:3306", "prozechd_Zfyant", "funktown33") or die ("Security Not Bypassed...[Address, Username, Pass]");
mysql_select_db("prozechd_PZDs") or die ("Could Not Locate That Database..");

$root = "http://prozechdesigns.com/";
$php_root = $_SERVER['DOCUMENT_ROOT'];
			
		
?>