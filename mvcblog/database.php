<?php

define('MYSQL_SERVER','localhost');
define('MYSQL_USRER','root');
define('MYSQL_PASSWORD','root');
define('MYSQL_DB','mvcblog21');

function db_connect(){
	$link= mysqli_connect(MYSQL_SERVER,MYSQL_USRER,MYSQL_PASSWORD,MYSQL_DB) or die("Error: ". mysqli_error($link));
	if(!mysqli_set_charset($link,"utf8")){
		print("Error: ".mysqli_error($link));
	}
	return $link;
}
?>