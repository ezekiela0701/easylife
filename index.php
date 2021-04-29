<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Easy Life</title>
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="Assets/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Assets/css/font-awesome.css">
    <link href="Assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>

   <header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand" href="#"><strong>Easy Life <i class="fa fa-envelope"></i></strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=electronique">Electronique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=fonctionnement">Fonctionnement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="carousel-example-2" class="view carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="sary/slide1.jpg" alt="First slide">
                <div class="mask rgba-blue-slight"></div>
            </div>
            <div class="carousel-caption">
                <div class="view intro-2" style="">
                    <div class="full-bg-img">
                       <div class="container text-center white-text wow fadeInUp">
                            <h2></h2>
                            <br>
                            <h5></h5>            
                        </div>
                    </div>
                        
                </div>
                
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="sary/slide2.jpg" alt="Second slide">
                <div class="mask rgba-blue-slight"></div>
            </div>
            <div class="carousel-caption">

                <div class="view intro-2" style="">
                    <div class="full-bg-img">
                       <div class="container text-center white-text wow fadeInUp">
                            <h2></h2>
                            <br>
                            <h5></h5>            
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

</header>

<main class="text-center py-5">

    <div class="container">
        <div class="col-md-12">
           
           
        <?php 

            if(isset($_GET['page']))
            {
                if($_GET['page']=="home")
                {
                    include("Controller/home.php");
                }
                if($_GET['page']=="electronique")
                {
                    include("Controller/electronique.php");
                }
                if($_GET['page']=="fonctionnement")
                {
                    include("Controller/fonctionnement.php");
                }
                if($_GET['page']=="contact")
                {
                    include("Controller/contact.php");
                }
            }

        ?>


        </div>
    </div>

</main>



    <footer class="page-footer font-small blue pt-4 mt-4">
        <div >
            <center><b style="font-size:22px">" C'est l'innovation qui différencie les leaders des suiveurs "</b></center>
        </div>
        <br>
        <div class="container-fluid text-center text-md-left">
            <div class="row">

            <div class="col-lg-6">
               
            </div>
            <div class="col-lg-6">
                
            </div>


               
            </div>
        </div>

        <div class="footer-copyright py-3 text-center">
            © 2018 Copyright:
            <a href="www.facebook.com/Miady_Mafy"> <strong>LiDa</strong> </a>
        </div>

</footer>


    <script type="text/javascript" src="Assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="Assets/js/popper.min.js"></script>
    <script type="text/javascript" src="Assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="Assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="Assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="Assets/js/parallax.min.js"></script>
    <script type="text/javascript" src="Assets/js/jquery.min.js"></script>
    <script src="js/totop/totop.min.js"></script>
    <script type="text/javascript">
        new WOW().init();
        $('.parallax-window').parallax();
        $('.totop').tottTop({
        duration: 500,
            scrtollTopBtnDuration: 400,
            scrollTop: 150
        });
     
    </script>
</body>

</html>
