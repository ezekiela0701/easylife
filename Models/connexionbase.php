<?php 

	try
	{
		$base=new PDO('mysql:host=localhost;dbname=easy_life','root','');
	}
	catch(exception $e)
	{
		die ("error".$e->getMessage());
	}

?>