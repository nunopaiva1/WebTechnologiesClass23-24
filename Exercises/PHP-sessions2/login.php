<?php 
session_start();

if(!isset($_SESSION['user']) && isset($_GET['user'])) {
	$_SESSION['user'] = $_GET['user'];
	header("location:index.php");
} else {
	header("location:index.php");
}

session_write_close();
?>