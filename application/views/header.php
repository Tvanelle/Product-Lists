<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->

        <title>Adventurer – One Page Creative HTML5 Page Template</title>

        <!-- Font Awesome -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,300,300italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link href="<?= base_url() ?>public/css/bootstrap.min.css.map">
        
        <!-- Material Design Bootstrap -->
        <link href="<?= base_url() ?>public/css/materialize.css" rel="stylesheet">

        <!-- Magnific-popup css -->
        <link href="<?= base_url() ?>public/css/magnific-popup.css" rel="stylesheet">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url() ?>public/css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <!--<link href="<?= base_url() ?>public/css/progressbar.css" rel="stylesheet">-->

        <!-- Material Design Bootstrap -->
        <link href="<?= base_url() ?>public/css/mdb.min.css" rel="stylesheet">



        <!-- Your custom styles (optional) -->
        <link href="<?= base_url() ?>public/css/style.css" rel="stylesheet">
        <link href="<?= base_url() ?>public/css/responsive.css" rel="stylesheet">

    </head>

    <body data-spy="scroll" data-target=".navbar-desktop">
        <!-- Start your project here-->
        <!--Navbar-->

        <div class='preloader'><div class='loaded'>&nbsp;</div></div>

        <nav class="navbar navbar-fixed-top navbar-light bg-faded">
            <!--Collapse button-->
            <div class="container">
                <a href="#" data-activates="mobile-menu" class="button-collapse right"><i class="fa fa-bars black-text"></i></a>

                <!--Content for large and medium screens-->
                <div class="navbar-desktop">
                    <!--Navbar Brand-->
                    <a class="navbar-brand" href="#home"><img src="<?= base_url() ?>public/img/Products-lists.jpg" alt="" /></a>
                    <!--Links-->
                    <ul class="nav navbar-nav pull-right hidden-md-down text-uppercase">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/Welcome">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/Produits/ajouterProduit">Ajouter un produit <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/Recherche">Obtenir un code à barre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/Contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="#!"><i class="fa fa-search fa-lg"></i></a>
                        </li>
                    </ul>
                    
                </div>

                <!-- Content for mobile devices-->
                <div class="navbar-mobile">

                    <ul class="side-nav" id="mobile-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/Welcome">Accueil<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/Produits/ajouterProduit">Ajouter un produit <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php">Obtenir un code à barre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>index.php/Contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="#!"><i class="fa fa-search fa-lg"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--/.Navbar-->
