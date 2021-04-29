<?php 
	session_start();
	include("../connexionbase.php");
	$supprimer=$base->QUERY('DELETE FROM message WHERE idmessage="'.$_SESSION['position'].'" ');
	header("Location:Principale.php#Messages")
?>