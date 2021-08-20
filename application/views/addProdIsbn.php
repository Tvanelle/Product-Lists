<head>
    <title>Productlist-Afoup Sarl</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" rel="">
        <link href="<?= base_url() ?>public/css/addUser.css" rel="stylesheet">

        
<script type="text/javascript" src="<?= base_url() ?>public/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/addUser.js"></script>
<script type="text/javascript" src="<?= base_url() ?>public/js/show.js"></script>
</head>
<div class="container-fluid" id="isbnDiv">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
            <a href="<?= base_url() ?>index.php/Welcome" class="btn btn-danger">Retourner à l'accueil</a><br/>
                <h2 id="heading">Ajouter Un Livre</h2>
                <p>Choisir le type de réference a enregistrer</p>
                <div class="row">
                    <div class="col-sm-4">
                    <a href="addFormEan" class="btn btn-danger" id="ean">EAN/UPC PRODUCT CODES</a><br/>
                    <p>Tous produits sauf livres et magazines </p>
                    </div>
                    <div class="col-sm-4">
                    <a href="Produits/addForm" class="btn btn-danger" id="isbn">ISBN PRODUCT CODES</a><br/> 
                    <p>Code pour les livres il debute par 978 </p>
                    </div>
                    <div class="col-sm-4">
                    <a href="addFormIssn" class="btn btn-danger" id="issn">ISSN PRODUCT CODES</a><br/>  
                    <p>Code pour les magazines il debute par 977 </p>
                    </div>
                </div>
                <form id="msform" style="" enctype="multipart/form-data" class="isbnDiv" action="<?= base_url() ?>index.php/Produits/ajouterProduitIsbn" method="post">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>Details du Livre</strong></li>
                        <li id="personal"><strong>Autres details</strong></li>
                        <li id="payment"><strong>Agents d'enregistrement</strong></li>
                        <li id="confirm"><strong>Fin</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Details du Livre:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Etape 1 - 4</h2>
                                </div> 
                            </div> 
                            <label class="fieldlabels" style="color:red;"><?php echo form_error('codeBarProd'); ?></label> 
                            <input type="number" name="codeBarProd" class="form-control"   placeholder="Entrer le numéro ISBN"> 
                            <label class="fieldlabels" style="color:red;"></label> 
                            <input type="text" name="nameProd" class="form-control"   placeholder="Entrer le titre du numéro"> 
                            <label class="fieldlabels"></label> 
                            <input type="text" name="autName1" class="form-control"   placeholder="Entrer le nom des auteurs">
                            <button type="submit" class="btn btn-primary btn-sm" id="addAut"><i class="fa fa-plus">Ajouter</i></button>
                            <div class="" id="othersAut">
                            </div>
                            <label class="fieldlabels"></label> 
                            <input type="text" name="markProd" class="form-control"   placeholder="Entrer la maison d'edition">
                            <textarea  name="descripProd" class="form-control"   placeholder="Entrer le résumé"></textarea>
                            <input name="composProd" class="form-control"   placeholder="Entrer le nombre de pages"></input>
                            <input name="useCounsProd" class="form-control"   placeholder="Entrer la collection"></input>
                            <input type="text" name="originCountryProd" class="form-control"   placeholder="Entrer le pays d'origine">
                            <input type="text" name="FormatProd" class="form-control"   placeholder="Entrer le Genre">
                            <input type="number" name="priceProd" class="form-control"   placeholder="Entrer le prix de vente">
                            <label class="fieldlabels">Ajouter une image</label> 
                            <input type="file" name="image1" class="form-control"   placeholder="Entrer une image du produit">
                            <button type="submit" class="btn btn-primary btn-sm" id="addImgBn"><i class="fa fa-plus">Ajouter</i></button>
                            <div class="" id="othersImgBn">
                            </div>
                            <input type="text" name="autorisationProd" class="form-control"   placeholder="Entrer la date">
                        </div> <input type="button" name="next" class="next action-button" value="Suivant" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Etape 2 - 4</h2>
                                    <h2 class="fs-title">Autres details:</h2>
                                </div>
                            </div> 
                            <label class="fieldlabels">Ajouter une vidéo qui presente votre produit</label> 
                            <input type="text" name="video1" class="form-control"   placeholder="Video de presentation ">
                                <button type="submit" class="btn btn-primary btn-sm" id="addBn"><i class="fa fa-plus">Ajouter</i></button>
                                <div class="" id="othersVideoBn">
                                </div>
                                <input type="text" name="urlFacebook" class="form-control"   placeholder="Entrer une url de votre page facebook">
                                <input type="text" name="urlTwiter"class="form-control"   placeholder="Entrer une url de votre page twitter">
                               <input type="text" name="urlYoutube" class="form-control"   placeholder="Entrer une url de votre page You tube">
                               <input type="text" name="urlPinterest" class="form-control"   placeholder="Entrer une url de votre page Pinterest">
                               <button type="submit" class="btn btn-primary btn-sm" id="addSocialNetBn"><i class="fa fa-plus">Ajouter un autre réseau social</i></button>
                               <div class="" id="othersSocialNetBn">
 
                               </div>
                               <input type="text" name="adressePtVte1" class="form-control"   placeholder="Entrer l'adresse">
                               <button type="submit" class="btn btn-primary btn-sm" id="addAddressBn"><i class="fa fa-plus">Ajouter</i></button>
                                <div class="" id="othersAddressBn">
                                    </div>
                               <input type="text" name="nomPtVte" class="form-control"   placeholder="Entrer le nom">
                               <input type="text" name="telSitePtVte" class="form-control"   placeholder="Entrer le telephone/Site web">
                               <input type="hidden" value="1" id="countDataBn" name="countDataBn">
                               <input type="hidden" value="1" id="countDataVidBn" name="countDataVidBn">
                               <input type="hidden" value="1" id="countDataCountBn" name="countDataCountBn">
                               <input type="hidden" value="1" id="countDataCityBn" name="countDataCityBn">
                               <input type="hidden" value="1" id="countDataAddressBn" name="countDataAddressBn">
                               <input type="hidden" value="1" id="countDataUrlBn" name="countDataUrlBn"> 
                               <input type="hidden" value="Isbn" id="" name="nameCategory">
                               <input type="hidden" value="2" id="" name="idCategory">
                               <input type="hidden" value="1" id="countAut" name="countAut">
                        </div> <input type="button" name="next" class="next action-button" value="Suivant" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Précedent" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Agents d'enregistrement:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Etape 3 - 4</h2>
                                </div>
                            </div> 
                            <input type="text" name="nameMaker" class="form-control"   placeholder="Entrer le nom et prénoms">
                            <input type="text" name="emailMaker" class="form-control"   placeholder="Entrer la fonction">
                                <input type="email" name="adresseMaker" class="form-control"   placeholder="Entrer l'adresse mail">
                                <input type="tel" name="telMaker1" class="form-control"   placeholder="Entrer le telephone">
                        </div> <input type="submit" name="next" class="next action-button" value="Enregistrer" /> 
                        <input type="button" name="previous" class="previous action-button-previous" value="Précedent" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- section issn -->

