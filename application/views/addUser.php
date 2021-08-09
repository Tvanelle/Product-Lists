<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="">
        <link href="<?= base_url() ?>public/css/addUser.css" rel="stylesheet">
</head>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Ajouter Un Produit</h2>
                <p>Product list offres plus de details sur les produits locaux enregistrer 
                                et permet aux entreprises la presence en ligne de ces derniers</p>
                <form id="msform" action="<?= base_url() ?>index.php/Produits/ajouterProduit" method="post">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Details du produit</strong></li>
                        <li id="personal"><strong>Autres details </strong></li>
                        <li id="payment"><strong>Details du fabriquant</strong></li>
                        <li id="confirm"><strong>Fin</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Details du produit</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 4</h2>
                                </div>
                            </div> 
                            <label class="fieldlabels">Numéro de code bar: *</label> 
                            <input type="number" name="codeBarProd" class="form-control"   placeholder="Entrer le numéro du code à barre"> 
                            <label class="fieldlabels">Nom : *</label> 
                            <input type="text" name="nameProd" class="form-control"   placeholder="Entrer le nom du produit"> 
                            <label class="fieldlabels">Password: *</label> 
                            <input type="text" name="sellNameProd" class="form-control"   placeholder="Entrer la denomination de vente">
                            <label class="fieldlabels">Confirm Password: *</label> 
                            <input type="text" name="markProd" class="form-control"   placeholder="Entrer la marque du produit">
                            
                            <textarea  name="descripProd" class="form-control"   placeholder="Entrer la description du produit"></textarea>
                            <textarea name="composProd" class="form-control"   placeholder="Entrer la composition du produit"></textarea>
                            <textarea name="useCounsProd" class="form-control"   placeholder="Entrer les conseils d'utilisation"></textarea>
                            <input type="text" name="originCountryProd" class="form-control"   placeholder="Entrer le pays d'origine">
                            <input type="text" name="FormatProd" class="form-control"   placeholder="Entrer le format/couleur">
                            <input type="number" name="priceProd" class="form-control"   placeholder="Entrer le prix de vente">
                            <input type="file" name="image1" class="form-control"   placeholder="Entrer une image du produit">
                            <button type="submit" class="btn btn-primary btn-sm" id="addImg"><i class="fa fa-plus">Ajouter</i></button>
                            <div class="" id="othersImg">
                            </div>
                            <input type="text" name="autorisationProd" class="form-control"   placeholder="Entrer une autorisation">
                </div> <input type="button" name="next" class="next action-button" value="Suivant" />
                </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Autres details:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 4</h2>
                                </div>
                                <input type="file" name="video1" class="form-control"   placeholder="Video de presentation ">
                                <button type="submit" class="btn btn-primary btn-sm" id="add"><i class="fa fa-plus">Ajouter</i></button>
                                <div class="" id="othersVideo">
                                </div>
                                <input type="text" name="urlFacebook" class="form-control"   placeholder="Entrer une url de votre page facebook">
                                <input type="text" name="urlTwiter"class="form-control"   placeholder="Entrer une url de votre page twitter">
                               <input type="text" name="urlYoutube" class="form-control"   placeholder="Entrer une url de votre page You tube">
                               <input type="text" name="urlPinterest" class="form-control"   placeholder="Entrer une url de votre page Pinterest">
                               <button type="submit" class="btn btn-primary btn-sm" id="addSocialNet"><i class="fa fa-plus">Ajouter un autre réseau social</i></button>
                               <div class="form-group" id="othersSocialNet">
                               <input type="text" name="adressePtVte1" class="form-control"   placeholder="Entrer l'adresse">
                               <button type="submit" class="btn btn-primary btn-sm" id="addAddress"><i class="fa fa-plus">Ajouter</i></button>
                                <div class="form-group" id="othersAddress">
                                    </div>
                               <input type="text" name="nomPtVte" class="form-control"   placeholder="Entrer le nom">
                               <input type="text" name="telSitePtVte" class="form-control"   placeholder="Entrer le telephone/Site web">
                               <input type="text" name="telSitePtVte" class="form-control"   placeholder="Entrer le telephone/Site web">
                <input type="hidden" value="1" id="countData" name="countData">
                <input type="hidden" value="1" id="countDataVid" name="countDataVid">
                <input type="hidden" value="1" id="countDataCount" name="countDataCount">
                <input type="hidden" value="1" id="countDataCity" name="countDataCity">
                <input type="hidden" value="1" id="countDataAddress" name="countDataAddress">
                <input type="hidden" value="1" id="countDataUrl" name="countDataUrl"> 
                              </div> 
                            </div> 
                        </div> <input type="submit" value="Enregistrer" /> 
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?= base_url() ?>public/js/jquery-2.2.3.min.js"></script>

<script type="text/javascript" src="<?= base_url() ?>public/js/addUser.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/show.js"></script>
