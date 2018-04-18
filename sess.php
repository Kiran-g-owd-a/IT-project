<?php include('connect.php');
	
	session_start();
	
	if(!isset($_SESSION['ses']))
	{
  	header("location:index.php");
  }

?>
