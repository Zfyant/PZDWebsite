<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_localhost = "localhost";
$database_localhost = "pzd";
$username_localhost = "root";
$password_localhost = "myzeus";
$localhost = mysql_connect($hostname_localhost, $username_localhost, $password_localhost) or trigger_error(mysql_error(),E_USER_ERROR); 
?>