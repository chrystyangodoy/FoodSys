<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sistema = "localhost";
$database_sistema = "sisvendas";
$username_sistema = "root";
$password_sistema = "";
$sistema = mysql_pconnect($hostname_sistema, $username_sistema, $password_sistema) or trigger_error(mysql_error(),E_USER_ERROR); 
?>