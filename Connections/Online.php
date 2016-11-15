<?php
$hostname_online = "localhost:3306";
$username_online = "prozechd_Zfyant";
$password_online = "funktown33";
$database_online = "prozechd_PZDs";
$online = mysql_connect($hostname_online, $username_online, $password_online) or trigger_error(mysql_error(),E_USER_ERROR); 
?>