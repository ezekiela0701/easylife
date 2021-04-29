<?php 
	session_start();
	$_SESSION["position"]=$_GET["page"];
	header("Location:supprimer.php");
?>