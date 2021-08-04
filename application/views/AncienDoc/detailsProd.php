<div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('<?= base_url() ?>public/images/code bar blanc.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Details de votre recherche</h1>
            </div>
          </div>
        </div>
      </div>
 </div>

<div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="scissors text-center">Details complet sur</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
           <div class="">
           <?php foreach ($keep as $key) {   ?>
              <div class="item-1 h">
                <img src="<?= base_url() ?>public/images/<?= $key->imgProd; ?>" alt="Image" class="img-fluid">
                <div class="item-1-contents">
                  <h3><?= $key->nameProd; ?></h3>
                  <ul>
                    <li class="d-flex"><span>Prix:</span> <span class="price ml-auto"><?= $key->priceProd; ?></span></li>
                    <li class="d-flex"><span>Code bar :</span><span class="price ml-auto">$10.00</span></li>
                    <li class="d-flex"><span>Lieu de fabrication:</span><span class="price ml-auto">$32.00</span></li>
                    <li class="d-flex"><span>Date de fabrication:</span><span class="price ml-auto">$23.00</span></li>
                    <li class="d-flex"><span>Lieu de vente:</span><span class="price ml-auto">$54.00</span></li>
                  </ul>
                </div><?php } ?>
                
              </div>

                         
          </div>
        </div>
      </div>
    </div>