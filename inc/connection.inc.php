<?php
	$host='localhost'; 
	$username='root';  
	$password=''; 
	$db_name='gmail-login';
	$tbl_name='users';
	if(!@$connection=mysqli_connect($host, $username, $password,$db_name))
	 die("Cannot connect"); 
?>