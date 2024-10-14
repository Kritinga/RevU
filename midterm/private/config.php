<?php
	$localhost = "localhost";
	$user = "root";
	$pass = "";
	$dbase = "ccs";

	$con = mysqli_connect($localhost, $user, $pass, $dbase) or die("Sorry! You can't connect to the database");
?>