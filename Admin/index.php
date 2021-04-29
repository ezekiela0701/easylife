<?php 
session_start();
include('../connexionbase.php');
if(isset($_POST)& !empty($_POST))
	{
		$username=$_POST['login'];
		$password=$_POST['pass'];

		$tirer=$base->QUERY('SELECT * from login_admin where user="'.$username.'"AND password="'.$password.'" ');
		$num_rows = $tirer->fetchColumn();
		if($donne=$tirer->fetch())
		{
			$utilisateur=$donne['utilisateur'];
		}
		
			if($num_rows==1)
			{
				$_SESSION['username']=$username;	
			}
			else
			{
				$fmsg="Identificateur inconnue";
			}
	

	}
	if(isset($_SESSION['username']))
	{
		$smg="connexion etablie";
		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
	<title>Admin Easy Life</title>
</head>
<body>
<?php if(isset($smg)){ header('Location:Principale.php');}?>
<?php if(isset($fmsg)){ ?> <div class="alert alert-danger" style="margin-top:-15vh"><?php  echo $fmsg; ?> </div> <?php } ?>
	<div class="container">
		<div class="header">
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<a href="#" class="navbar-brand">
					<b>Easy Life</b>
				</a>
			</nav>
		</div>
		<br><br><br><br><br>
		<div class="row">
			<div class="col-lg-offset-3 col-sm-offset-3 col-md-offset-3 col-xs-offset-3 col-lg-6 col-sm-6 col-md-6 col-xs-6">
				<form class="well" action="index.php" method="POST">
					<div class="page-header"><center><h3>Authentification</h3></center></div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input type="text" name="login" class="form-control" required>
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input type="password" name="pass" class="form-control" required>
					</div>
					<br>
					<input type="submit" value="connexion" name="" class="btn btn-primary btn-right">
				</form>
				
			</div>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
	
</body>
</html>