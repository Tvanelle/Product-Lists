<head>
  <style>
    body{
      background-color:#f6f5f5;
    }
    </style>
</head>
        <div id="home" class="slider">
            <ul class="slides">
                <li>
                    <img src="<?= base_url() ?>public/img/Header/Scanner-code-barre.jpg" width="200"> <!-- random image -->
                    <div class="caption center-align">
                        <div class="single_home">
                            <h3>Rechercher Votre Produit</h3>
                            <p>Product list offres plus de details sur les produits locaux enregistrer 
                           et permet aux entreprises la presence en ligne de ces derniers</p>
                            <form method="post" action="<?= base_url() ?>index.php/Recherche">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="single_newsletter text-md-right text-sm-center wow zoomIn">
                                        <div class="md-form input-group">
                                            <!--<span class="input-group-btn">
                                            <select>
                                            <option>Code a bar</option>
                                            <option>Isbn</option>
                                            <option>Issn</option>
                                            </select>
                                           </span>-->
                                           <input type="text" class="form-control" required name='codeBarProd' placeholder="Saisissez votre code barre ici.">
                                           <span class="input-group-btn">
                                               <button class="btn waves-effect waves-red" type="submit"><i class="fa fa-search"></i> Rechercher </button>
                                           </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                
            </ul>
        </div>
        <section id="about" class="about" style="background-color:white;margin-top:-3%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_about_area">
                            <div class="head_title text-justify  m-y-3 wow fadeInUp">
                                <center><h3  style="color:#dc3545;">C'est quoi un code-barre ?</h3></center>
                                <p>Un code bar est un symbole qui peut etre facile
                                   ment lu par un scanner de code barres ou une application smartphone.
                                   Et qui relie un produit aux informations le concernant dans la base de donn??es.
                                    Chaque code-barres est un num??ro unique et peux correspondre qu???a un produit dans le monde.</br></br>
                                   Les codes-barres sont le plus souvent utilis??s aux caisses de magasins de vente aux d??tails lors de la
                                    facturation de vos achats Les d??taillants utilisent les codes ?? barres pour retrouver rapidement le nom, 
                                    le prix et les quantit??s disponibles d???un produit a la caisse et pour suivre les produits tout au long de
                                     la chaine d???approvisionnement. Une fois le code scanner, Les propri??taires de magasins peuvent ??tre 
                                     avertir de l???insuffisance des stocks d???un article particulier, Ce qui les incites a passer une nouvelle 
                                     commande a temps en temps utilis??s.</br></br>
                                     Chaque variation d???un produit (par exemple, chaque taille et chaque couleur) n??cessite son propre code-barres
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </section><!-- End of About Section-->


        <section id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_service_area">
                            <div class="head_title center m-y-3 wow fadeInUp">
                              <h3 style="color:#dc3545;">Les types de code-barres pour la vente au detail</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="jumbotron single_service  wow fadeInLeft">
                                        <div class="service_icon center">
                                           <img class="img" src="<?= base_url() ?>public/img/code bar2.png" alt="" />
                                        </div>
                                        <div class="s_service_text text-sm-center text-xs-center">
                                            <h4>EAN-13 Barcodes / European Article Numbering</h4>
                                            <p>European Article Numbering (EAN), comporte 13 chiffres.
                                                               Ils utilis??s dans le monde entier sur tous produits de d??tail, a l???exception des
                                                                livres et des magasins. Ils sont les plus utilis??s au monde, ?? l???exception des 
                                                                Etats-Unis et du Canada ou les codes ?? barres UPC-A (Universal Product Codes) 
                                                                sont plus courant Chaque EAN-13 est sp??cifique ?? un produit et est encod?? dans 
                                                                une image de code ?? barres. Cela signifie que lorsque le code barre est scann?? 
                                                                dans les syst??mes des magasins, les donn??es relatives aux prix et ?? l???inventaire 
                                                                de votre produit sont enregistr??es. Un num??ro EAN-13 diff??rent et donc n??cessaire 
                                                                pour chaque produit unique</p>
                                        </div>

                                        <div class="service_btn center">
                                            <a href="#!" class="btn btn-danger waves-effect waves-red">See  More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="jumbotron single_service  wow fadeInLeft">
                                        <div class="service_icon center">
                                           <img class="img" src="<?= base_url() ?>public/img/code bar2.png" alt="" />
                                        </div>
                                        <div class="s_service_text text-sm-center text-xs-center">
                                            <h4>ITF-14 Carton & Pallet Barcodes</h4>
                                            <p>Les codes pour les cartons ITF-14 encore appel??s GTIN-14 ou shopping Container 
                                                                Codes (SCC-14) 
                                                             Permettent d???identifier des unit??s logistiques et sont cr????s ?? partir des codes 
                                                             ?? barres EAN-13
                                                             Et UPC-A. Ils ne sont utilis??s que pour le transport et dans les entrep??ts sur les
                                                              cartons contenant une quantit?? sp??cifique de l???article que le code ?? barres du 
                                                              produit repr??sent??. Ils ne doivent pas ??tre utilis??s pour des produits qui sont
                                                               vendus individuellement au d??tail. Ce sont des unit??s logistiques et non 
                                                               commerciales</p>
                                        </div>

                                        <div class="service_btn center">
                                            <a href="#!" class="btn btn-danger waves-effect waves-red">See  More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="jumbotron single_service wow fadeInUp">
                                        <div class="service_icon center">
                                          <img class="img" src="<?= base_url() ?>public/img/code bar2.png" alt="" />
                                        </div>
                                        <div class="s_service_text text-sm-center text-xs-center">
                                            <h4>ISBN Books Barcodes</h4>
                                            <p>Les num??ros internationaux normalis?? pour le livre (ISBN) sont des code-barres 
                                                                pour les livres papier et ??lectroniques. Les ISBN commencent g??n??ralement par 
                                                                978 et sont distribu??s par les agences ISBN de chaque pays <a href="">(voir isbn-interna
                                                                tional.org/agency)</a>. Ils peuvent ??galement ??tre obtenus aupr??s d???agences d?????di
                                                                tion ind??pendantes telles que <a href="">bookisbn.org.uk</a>, utilis??es par les auteurs qui 
                                                                s???auto??ditent</p>
                                        </div>

                                        <div class="service_btn center">
                                            <a href="#!" class="btn btn-danger waves-effect waves-red">See  More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="jumbotron single_service  wow fadeInLeft">
                                        <div class="service_icon center">
                                           <img class="img" src="<?= base_url() ?>public/img/code bar2.png" alt="" />
                                        </div>
                                        <div class="s_service_text text-sm-center text-xs-center">
                                            <h4>ISSN Magazine Barcodes</h4>
                                            <pAn International Standard Serial Number (ISSN) is a unique 8-digit number
                                                                 used to identify periodical publications such as magazines and journals. 
                                                                 They can be applied for at <a href="">issn.org/services/requesting-an-issn.</a> </br>
                                                            Only Apply for an ISSN if your publications meet the following criteria :</br>
                                                            <li>They are serials (journals, newspapers, magazines, monographie series etc.)</li></br>
                                                            <li>They are ongoing integrating resources (websites, databases etc.) </li></br></p>
                                        </div>

                                        <div class="service_btn center">
                                            <a href="#!" class="btn btn-danger waves-effect waves-red">See  More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="jumbotron single_service wow fadeInUp">
                                        <div class="service_icon center">
                                          <img class="img" src="<?= base_url() ?>public/img/code bar2.png" alt="" />
                                        </div>
                                        <div class="s_service_text text-sm-center text-xs-center">
                                            <h4>UPC-A Barcodes</h4>
                                            <p>Les codes ?? barre UPC ?? 12 chiffres sont principalement utilis??s aux Etats-Unis 
                                                                et au canada sur tous les produits de d??tails ?? l???exception des livres et des 
                                                                magasins.</p>
                                        </div>

                                        <div class="service_btn center">
                                            <a href="#!" class="btn btn-danger waves-effect waves-red">See  More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section> <!-- End of service section -->

        

        <section id="about" class="about" style="background-color:white;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_about_area">
                            <div class="head_title  text-justify m-y-3 wow fadeInUp">
                                <center><h3  style="color:#dc3545"><i class="fa fa-info-circle"  style="color:#dc3545"></i> Pourquoi Product List ?</h3></center>
                                <p>
                                Le packaging d???un produit donne toutes les informations utiles mais pas toutes. L???emballage d???un produit ne
                                 vous donnera pas la liste des points de vente ou le trouver (physique ou en ligne), vous n???aurez pas acc??s 
                                 aux avis de vos consommateurs. Avec Product List vous fournis plus d???informations ?? vos clients comme : 
                                    le nom du fabriquant, Description du produit, Composition, pays d???origine du produit, ou le trouver,
                                     vos pages sur les r??seaux sociaux
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="joinus" class="joinus" style="margin-top:-04%;">
            <div class="main_joinus_area m-y-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main_joinus_content center white-text wow fadeInUp">
                                <h2 class="text-uppercase m-b-3">Processus d'ajout d'un nouveau produit</h2>
                                <div class="row">
                                    <div class="col-sm-12">
                                       <img class="img" src="<?= base_url() ?>public/img/ajout produit.png" width="800" alt="" /> 
                                    </div>
                                </div>  
                            </div>
                            <div class="row" style="margin-top:-20%">
                            <div class="col-sm-offset-4 col-sm-6">
                            <a href="<?= base_url() ?>index.php/Produits/ajouterProduit" style=" heigth:40px;border-raduis:7px; " class="btn btn-danger"><i class="fa fa-plus m-b-1"></i>Ajouter Un Produit</a>
                            </div>  
                           </div></br></br>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- End of JoinUs section -->




        
      



        