<?php
	session_start();
	if(!isset($_SESSION["email"]) && !isset($_SESSION["password"]))
	{
		echo "<script type='text/javascript'> window.location='../index.php' ;</script>";
	}
?>
