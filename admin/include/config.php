<?php
$mysql_hostname = "ec2-18-140-1-70.ap-southeast-1.compute.amazonaws.com";
$mysql_user = "phpmyadmin";
$mysql_password = "D3j#3XMCh5de3REA";
$mysql_database = "cms";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");

?>
