<?php 
	include('../connexionbase.php');
    session_start();
    if(!isset($_SESSION['username']))
    {
        header('Location:index.php');
    } 
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Admin Easy Life
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Principale.css">
</head>
<body style="background-color: ;">
	<div class="container">
		<div id="throbber" style="display:none; min-height:120px;"></div>
			<div id="noty-holder"></div>
			<div id="wrapper">
			    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			        <div class="navbar-header">
			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			            <a class="navbar-brand">
			                <b>Easy Life</b>
			            </a>
			        </div>
			        <ul class="nav navbar-right top-nav">
			            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i></i>
			                </a>
			            </li>            
			            <li class="dropdown">
			                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="glyphicon glyphicon-user"></b></a>
			                <ul class="dropdown-menu">
			                	<li>Deconnexion</li>
			                </ul>
			                
			            </li>
			        </ul>
			        <div class="collapse navbar-collapse navbar-ex1-collapse">
			            <ul class="nav navbar-nav side-nav">
			                <li>
			                    <a href="#Messages"><i class="glyphicon glyphicon-bar-chart"></i> Messages reçue<i class="fa fa-fw fa-angle-down pull-right"></i></a>
			                </li>
			                <li>
			                	<a href="deconnexion.php"><span class="glyphicon glyphicon-logout">Deconnexion</span></a>
			                </li>
			               
			            </ul>
			        </div>
			    </nav>
			    <div id="page-wrapper">
			        
			        <div class="row" id="main" >
			            <div id="#Messages">
			            	<h3 class="title-header"><center>Les messages reçues</center></h3>
			               	 <table class="table table-bordered table-condensed table-striped">
			               	 	
			               	 	<tr>
			               	 		<td>Numéros</td>
			               	 		<td>Nom d'utilisateur</td>
			               	 		<td>Email</td>
			               	 		<td>Telephone</td>
			               	 		<td>Message</td>
			               	 		<td></td>
			               	 	</tr>
			               	 	<?php 
			               	 		$i=1;
			               	 		$j=1;
			               	 		$tirer=$base->QUERY('SELECT * FROM message');
			               	 		while($donne=$tirer->fetch())
			               	 		{
			               	 		$tab[$j]=array($donne["idmessage"]);


								?>
									<tr>
										<td> <?php echo $i;?></td>
										<td> <?php echo $donne["nom"] ?></td>
										<td> <?php echo $donne["email"] ?></td>
										<td> <?php  echo $donne["numero"] ?></td>
										<td> <?php echo $donne["message"] ; $i++; ?></td>
										
								<?php	
									foreach($tab as $element)
									{
								?>
								<td><a href="supprimermes.php?page=<?php echo $element[0] ?>" class="btn btn-danger glyphicon glyphicon-trash" title="supprimer" data-toggle="tooltip" OnClick="return confirm('Voulez-vous vraiment supprimer ?')"></a></td>
									

								<?php									
									}	
								?>
								</tr>
								<?php	               	 				
			               	 		}	

			               	 	?>
			               	 </table>
			              
			               
			           	</div>
			        </div>
			        
			    </div>
	</div>















<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
<script type="text/javascript">
	$(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $(".side-nav .collapse").on("hide.bs.collapse", function() {                   
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
    });
    $('.side-nav .collapse').on("show.bs.collapse", function() {                        
        $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
    });
})    
    
</script>
</body>
</html>