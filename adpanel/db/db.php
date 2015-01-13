<?php
$db = @mysql_connect("localhost","dota_base","dota_base"); // адрес бд, логин, пароль
mysql_set_charset( 'utf8' );
mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'");
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query ("SET NAMES utf8");
$db_select = mysql_select_db("dota_base",$db); //имя бд
?>
