<head>
  <style>
    body{
      background-color:whitesmoke;
    }
    </style>
</head>
<div id="home" class="slider">
            <ul class="slides">
                <li>
                    <img src="<?= base_url() ?>public/img/Header/Scanner-code-barre.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <div class="single_home"> 
                            <h3>Details complet de votre recherche</h3>
                            <p>Voici toutes les informations disponnible sur votre prduit</p>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>

<div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
          <?php foreach ($keep as $key) { ?>
            <h3 class="scissors text-center">Details complet</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
           <div class="">
              <?php
                  $chaine = $key->imgProd;
                  $chaineF=(explode("|",$chaine));
                  $chainead = $key->adressePvte;
                  $chaineAd=(explode("|",$chainead));
              ?>
              <div class="item-1 h">
                <img src="<?= base_url() ?>public/img/<?= $chaineF[0] ?>" alt="Image" class="img-fluid" width="100">
                <div class="item-1-contents">
                  <h3> <?= $key->nameProd; ?></h3><br/>
              <div class="row"  style="background-color:white;">
                 <div class="col-sm-3">
                  <ul><br/>
                    <li class="d-flex"><span>Nom du fabriquant:</span> </li>
                    <li class="d-flex"><span>Description du produit:</span></span></li>
                    <li class="d-flex"><span>Composition du produit:</span></li>
                    <li class="d-flex"><span>Pays d'origine:</span><span class="price ml-auto"></span></li>
                    <li class="d-flex"><span>Adresse des point de vente :</span></li>
                    <li class="d-flex"><span>Page facebook:</span><span class="price ml-auto"></span></li>
                    <li class="d-flex"><span>Page youtube:</span><span class="price ml-auto"></span></li>
                    <li class="d-flex"><span>page twitter:</span><span class="price ml-auto"></span></li>
                    <li class="d-flex"><span>Page pinterest:</span><span class="price ml-auto"></span></li>  
                </ul><br/><br/>
                </div>
                <div class="col-sm-9">
                <ul><br/>
                <li class="d-flex"><span class="price ml-auto"><?= $key->nameMaker ?></span></li>
                <li class="d-flex"><span class="price ml-auto"><?= $key->descripProd; ?></span></li>
                <li class="d-flex"><span class="price ml-auto"><?= $key->composProd; ?></li>
                <li class="d-flex"><span class="price ml-auto"><?= $key->originCountryProd; ?></span></li>
                  <li class="d-flex"><?php foreach ($chaineAd as $key1 => $value) { ?>
                     <span class="price ml-auto"><?= $value.'-'; ?></span><?php  }?></li>
                  <li class="d-flex"> <span class="price ml-auto"><?= $key->urlFacebook; ?></span></li>
                  <li class="d-flex"> <span class="price ml-auto"><?= $key->urlYoutube; ?></span></li>
                  <li class="d-flex"> <span class="price ml-auto"><?= $key->urlTwiter; ?></span></li>
                  <li class="d-flex"> <span class="price ml-auto"><?= $key->urlPinterest; ?></span></li>  
                </ul><br/><br/>
                    </div>
              </div>
                </div><?php  }?>
                
              </div>
                         
          </div>
        </div>
      </div>
    </div><br/><br/>
    