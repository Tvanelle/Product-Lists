
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
          <?php foreach ($keep as $key) {   ?>
            <h3 class="scissors text-center">Details complet</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
           <div class="">
           
              <div class="item-1 h">
                <img src="<?= base_url() ?>public/img/<?= $key->nameImg; ?>" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3><?= $key->nameProd; ?></h3>
                  <ul>
                    <li class="d-flex"><span>Nom du fabriquant:</span> <span class="price ml-auto"></span></li>
                    <li class="d-flex"><span>Description du produit:</span><span class="price ml-auto"><?= $key->composProd; ?></span></li>
                    <li class="d-flex"><span>Composition du produit:</span> <span class="price ml-auto"><?= $key->composProd; ?></li>
                    <li class="d-flex"><span>Pays d'origine:</span><span class="price ml-auto"><?= $key->originCountryProd; ?></span></li>
                    <li class="d-flex"><span>Adresse des point de vente :</span><span class="price ml-auto"><?= $key->adressePvte; ?></span></li>
                    <li class="d-flex"><span>Page faceb0ok:</span><span class="price ml-auto"><?= $key->urlFacebook; ?></span></li>
                    <li class="d-flex"><span>Page youtube:</span><span class="price ml-auto"><?= $key->urlYoutube; ?></span></li>
                    <li class="d-flex"><span>page twitter:</span><span class="price ml-auto"><?= $key->urlTwiter; ?></span></li>
                    <li class="d-flex"><span>Page pinterest:</span><span class="price ml-auto"><?= $key->urlPinterest; ?></span></li>
                    <li class="d-flex"><span>Autorisation:</span><span class="price ml-auto"><?= $key->autorisationProd; ?></span></li>
                    <li class="d-flex"><span>Email du fabriquant:</span><span class="price ml-auto"><?= $key->emailMaker; ?></</span></li>
                    
                    
                </ul>
                </div><?php } ?>
                
              </div>

                         
          </div>
        </div>
      </div>
    </div>