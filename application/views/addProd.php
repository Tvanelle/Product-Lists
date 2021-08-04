<div id="home" class="slider">
            <ul class="slides">
                <li>
                    <img src="<?= base_url() ?>public/img/Header/Scanner-code-barre.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <div class="single_home">
                            <h3>Ajouter Un Produit</h3>
                            <p>Product list offres plus de details sur les produits locaux enregistrer 
                                et permet aux entreprises la presence en ligne de ces derniers</p>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>

<div class="site-section bg-light" id="contact-section">
      <div class="col-sm-offset-3 container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h3>Enregistrer un produit </h3>
          <p>Details concernant votre produit</p></hr></br>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-8 mb-5" >
            <form action="<?= base_url() ?>index.php/Produits/ajouterProduit" method="post">
              <div class="form-group">
                <div class="">
                  <input type="number" name="codeBarProd" class="form-control"   placeholder="Entrer le numéro du code à barre">
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="nameProd" class="form-control"   placeholder="Entrer le nom du produit">
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="sellNameProd" class="form-control"   placeholder="Entrer la denomination de vente">
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="markProd" class="form-control"   placeholder="Entrer la marque du produit">
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <textarea  name="descripProd" class="form-control"   placeholder="Entrer la description du produit"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <textarea name="composProd" class="form-control"   placeholder="Entrer la composition du produit"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <textarea name="useCounsProd" class="form-control"   placeholder="Entrer les conseils d'utilisation"></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="originCountryProd" class="form-control"   placeholder="Entrer le pays d'origine">
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="FormatProd" class="form-control"   placeholder="Entrer le format/couleur">
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="number" name="priceProd" class="form-control"   placeholder="Entrer le prix de vente">
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

              <div class="form-group">
                <div class="">
                  <input type="text" name="autorisationProd" class="form-control"   placeholder="Entrer une autorisation">
                </div>
              </div></hr></br>

              <p style="font-weight:bold;border-bottom:3px solid pink;font-size:18px;text-align:center">Autres details concernant votre  produit</p></hr></br>
              
              <div class="form-group">
                <div class="row">
                   <div class="col-sm-8">
                      <input type="file" name="video1" class="form-control"   placeholder="Video de presentation ">
                   </div>
                   <div class="col-sm-2">
                      <button type="submit" class="btn btn-primary btn-sm" id="add"><i class="fa fa-plus">Ajouter</i></button>
                   </div>
              </div>
              <div class="form-group" id="othersVideo">
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="urlFacebook" class="form-control"   placeholder="Entrer une url de votre page facebook">
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="urlTwiter"class="form-control"   placeholder="Entrer une url de votre page twitter">
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="urlYoutube" class="form-control"   placeholder="Entrer une url de votre page You tube">
                </div>
              </div>
              <div class="form-group">
                <div class="">
                  <input type="text" name="urlPinterest" class="form-control"   placeholder="Entrer une url de votre page Pinterest">
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
 
              <p style="font-weigth:bold;border-bottom:3px solid pink;font-size:18px;text-align:center">Ajouter des points de ventes</p></hr></br>
              
              <div class="form-group">
                <div class="row">
                   <div class="col-sm-8">
                      <input type="text" name="paysPtVte1" class="form-control" placeholder="Entrer le pays">
                   </div>
                   <div class="col-sm-2">
                      <button type="submit" class="btn btn-primary btn-sm" id="addCount"><i class="fa fa-plus">Ajouter</i></button>
                   </div>
              </div>
              <div class="form-group" id="othersCount">
              </div>

              <div class="form-group">
                <div class="row">
                   <div class="col-sm-8">
                      <input type="text" name="villePtVte1" class="form-control"   placeholder="Entrer la ville">
                   </div>
                   <div class="col-sm-2">
                      <button type="submit" class="btn btn-primary btn-sm" id="addCity"><i class="fa fa-plus">Ajouter</i></button>
                   </div>
              </div>
              <div class="form-group" id="othersCity">
              </div>

              <div class="form-group">
                <div class="row">
                   <div class="col-sm-8">
                      <input type="text" name="adressePtVte1" class="form-control"   placeholder="Entrer l'adresse">
                   </div>
                   <div class="col-sm-2">
                      <button type="submit" class="btn btn-primary btn-sm" id="addAddress"><i class="fa fa-plus">Ajouter</i></button>
                   </div>
              </div>
              <div class="form-group" id="othersAddress">
              </div>
              
              <div class="form-group">
                <div class="">
                  <input type="text" name="nomPtVte" class="form-control"   placeholder="Entrer le nom">
                </div>
              </div>
              <div class="form-group">
                <div class="">
                <input type="text" name="telSitePtVte" class="form-control"   placeholder="Entrer le telephone/Site web">
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
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>




