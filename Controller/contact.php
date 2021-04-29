<?php 
    include("Models/connexionbase.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	   <div class="row pb-5 wow pulse">

        <div class="col-lg- col-xl-6 pb-3">
				           <div class="card">

			
				    <div class="card-body">

				        <form>
				            <p class="h4 text-center py-4">Information</p>

				            <div class="md-form">
				               Mahazo Antsobolo 
				            </div>

				  
				            <div class="md-form">
				               	Institut Supérieur Polytechnique de Madagascar 
				            </div>

				            <div class="md-form">
				                +261322600027
				            </div>
                            <div class="md-form">
                                ElectroniqueInformatique@ispm.mg
                            </div>

				        
				           
				        </form>
			

				    </div>
		

				</div>
        </div>
      
        <div class="col-lg-6 col-xl-6">
            <div class="card">

    		<div class="card-body">

      
        <form action="index.php?page=contact" method="POST">
            <p class="h4 text-center py-4">Nous contacter</p>

           
            <div class="md-form">
                <i class="fa fa-user prefix grey-text"></i>
                <input type="text" id="materialFormCardNameEx" name="nom" class="form-control" required>
                <label for="materialFormCardNameEx" class="font-weight-light">Nom</label>
            </div>

            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="email" id="materialFormCardEmailEx" name="email" class="form-control" required>
                <label for="materialFormCardEmailEx" class="font-weight-light">Email</label>
            </div>

          
            <div class="md-form">
                <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                <input type="text" id="materialFormCardConfirmEx" name="telephone" class="form-control" required>
                <label for="materialFormCardConfirmEx" class="font-weight-light">Telephone</label>
            </div>

        
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="text" id="materialFormCardPasswordEx" name="message" class="form-control" required>
                <label for="materialFormCardPasswordEx" class="font-weight-light">Votre message</label>
            </div>

            <div class="text-center py-4 mt-3">
                <button class="btn btn-cyan" type="submit" data-toggle="modal" data-target="#succes">Envoyer</button>
            </div>
        </form>
        <?php 
            if((isset($_POST["nom"]))&&(isset($_POST["email"]))&&(isset($_POST["telephone"]))&&(isset($_POST["message"])))
            {
                $ajout=$base->PREPARE("INSERT INTO message(nom,email,numero,message)VALUES(?,?,?,?) ");
                $ajout->execute(array(
                        $_POST["nom"],
                        $_POST["email"],
                        $_POST["telephone"],
                        $_POST["message"]
                    ));
        ?>
                
                <div class="modal fade" id="succes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                               <h1>Message envoyer avec succès</h1>   
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
           
         <?php 
            }
        
       

        ?>
       
    </div>
   

</div>
            
        </div>
        

    </div>
</body>
</html>