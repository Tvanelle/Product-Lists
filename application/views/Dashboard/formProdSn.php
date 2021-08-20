<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pannel d'administration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url() ?>public/Backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>public/Backend/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Tous les produits</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="" style="opacity: .8">
      <span class="brand-text font-weight-light">ProductList</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
          <!--<img src="public/img/Products-lists.jpg" class="img-circle elevation-5" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block"><h4>Afoup-Corp</h4></a>
        </div>
      </div>

     
    </div>
    <!-- /.sidebar -->
  </aside>
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-4"></div>
          <div class="col-md-6"></br></br>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Fiche de produit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                <div class="card-body">
                <?php foreach ($data as $key) { 
                    $chaine = $key->imgProd;
                    $chaineF=(explode("|",$chaine));
                    echo count($chaineF);

                    $chaineV=$key->videoProd;
                    $chaineVm=(explode("|",$chaineV));

                    $chaineA=$key->adressePvte;
                    $chaineAm=(explode("|",$chaineA));
                    ?>
                <form action="<?= base_url() ?>index.php/Dashboard/updateProdSn" method="post">
              <div class="form-group">
                <div class="">
                  <input type="number" name="codeBarProd" class="form-control" value=<?=$key->codeBarProd?>>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="nameProd" class="form-control" value=<?=$key->nameProd?>>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="sellNameProd" class="form-control" value=<?=$key->sellNameProd?>>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="markProd" class="form-control" value=<?=$key->markProd ?>>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <textarea  name="descripProd" class="form-control" value=<?=$key->descripProd?>></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <textarea name="composProd" class="form-control" value=<?=$key->composProd?>></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <textarea name="useCounsProd" class="form-control"  value=<?=$key->useCounsProd?>></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="originCountryProd" class="form-control" value=<?=$key->originCountryProd?>>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="FormatProd" class="form-control" value=<?=$key->FormatProd?>>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="number" name="priceProd" class="form-control"  value=<?=$key->priceProd?>>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                   <div class="col-sm-8">
                      <input type="file" name="image1" class="form-control"   placeholder="Entrer une image du produit">
                   </div>
                   <div class="col-sm-2">
                      <button type="submit" class="btn btn-primary btn-sm" id="addImg"><i class="fa fa-plus">Ajouter</i></button>
                   </div>
              </div>
              <div class="form-group" id="othersImg">
              </div>
              <div class="row">
                <?php for ($i=0; $i < count($chaineF) ; $i++) {  ?>
                <div class="col-sm-2">
                <img src="<?= base_url() ?>uploads/<?=$chaineF[$i]?>" alt="Image" class="img-fluid" width="100">
                <br/><br/><br/>
                <input type="hidden" name="imager<?=$i?>" value=<?=$chaineF[$i]?>>
              </div><?php  }?></div>
              <input type="hidden" name="nbImage" value=<?=count($chaineF)?>>
              <div class="form-group">
                <div class="">
                  <input type="text" name="autorisationProd" class="form-control" value=<?=$key->autorisationProd?>>
                </div>
              </div></hr></br>

              <p style="font-weight:bold;border-bottom:3px solid pink;font-size:18px;text-align:center">Autres details concernant votre  produit</p></hr></br>
              
              <div class="form-group">
              <div class="col-sm-2">
                  <button type="submit" class="btn btn-primary btn-sm" id="add"><i class="fa fa-plus">Ajouter</i></button>
              </div>
                <div class="row">
                <?php for ($i=0; $i < count($chaineVm) ; $i++) {  ?>
                   <div class="col-sm-8">
                      <input type="text" name="videos<?=$i?>" class="form-control"  value=<?=$chaineVm[$i]?>>
                   </div><?php  }?>
                   <input type="" name="nbVideo" value=<?=count($chaineVm)?>>    
              </div>
              <div class="form-group" id="othersVideo">
              <input type="hidden" name="video1">
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="urlFacebook" class="form-control" value=<?=$key->urlFacebook?>>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="urlTwiter"class="form-control" value=<?=$key->urlTwiter?>>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="urlYoutube" class="form-control"  value=<?=$key->urlYoutube?>>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="urlPinterest" class="form-control"  value=<?=$key->urlPinterest?>>
                </div>
              </div>
              <div class="form-group">
              <div class="col-sm-2">
                  <button type="submit" class="btn btn-primary btn-sm" id="addSocialNet"><i class="fa fa-plus">Ajouter un autre réseau social</i></button>
              </div>
              </div> 
              <div class="form-group" id="othersSocialNet">
              </div>
              </hr></br></br></br>


              <p style="font-weight:bold;border-bottom:3px solid pink;font-size:18px;text-align:center">               
              <h4>Agents d'enregistrement</h4></p></hr></br>

                <input type="text" name="nameMakerE" class="form-control"  value=<?=$key->nameMakerE?>></br>
                 <input type="text" name="emailMakerE" class="form-control"   value=<?=$key->emailMakerE?>></br>
                 <input type="email" name="adresseMakerE" class="form-control"  value=<?=$key->adresseMakerE?>></br>
                  <input type="tel" name="telMaker1E" class="form-control"   value=<?=$key->telMaker1E?>></br>
              </div>
              </hr></br></br></br>
         

 
              <p style="font-weigth:bold;border-bottom:3px solid pink;font-size:18px;text-align:center">Ajouter des points de ventes</p></hr></br>
              
              
              <div class="form-group">
                <div class="row">
                <?php for ($i=0; $i < count($chaineAm) ; $i++) {  ?>
                   <div class="col-sm-8">
                      <input type="text" name="adressePtVtes<?=$i?>" class="form-control" value=<?=$chaineAm[$i]?>>
                   </div><?php  }?>
                   <input type="" name="nbAdresse" value=<?=count($chaineAm)?>>
                   <div class="col-sm-2">
                      <button type="submit" class="btn btn-primary btn-sm" id="addAddress"><i class="fa fa-plus">Ajouter</i></button>
                   </div>
              </div>
              <div class="form-group" id="othersAddress">
              </div>
              
              <div class="form-group">
                <div class="">
                  <input type="text" name="nomPtVte" class="form-control" value=<?=$key->	nomPvte?>>
                </div>
              </div>
              
              <div class="form-group">
                <div class="">
                <input type="text" name="telSitePtVte" class="form-control"  value=<?=$key->telSitePvte?>>
                <input type="hidden" value="1" id="countData" name="countData">
                <input type="hidden" value="1" id="countDataVid" name="countDataVid">
                <input type="hidden" value="1" id="countDataCount" name="countDataCount">
                <input type="hidden" value="1" id="countDataCity" name="countDataCity">
                <input type="hidden" value="1" id="countDataAddress" name="countDataAddress">
                <input type="hidden" value="1" id="countDataUrl" name="countDataUrl">
                </div>
              </div>

              <div class="form-group">
                <div class="">
                  <input type="submit" class="btn btn-block btn-primary" value="Enregistrer">
                </div></div>
              </div>
            </form> <?php } ?>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script type="text/javascript" src="<?= base_url() ?>public/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>public/js/show.js"></script>