<?php
	session_start();
	mysql_connect('localhost','root','') or die("Database  not connect");
	mysql_select_db('EXPENSE') or die("No database selected");
	
	?>
