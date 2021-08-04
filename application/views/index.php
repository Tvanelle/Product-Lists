

        <div id="home" class="slider">
            <ul class="slides">
                <li>
                    <img src="<?= base_url() ?>public/img/Header/Scanner-code-barre.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <div class="single_home">
                            <h3>Rechercher Votre Produit</h3>
                            <p>Product list offres plus de details sur les produits locaux enregistrer 
                                et permet aux entreprises la presence en ligne de ces derniers</p>
                            <form method="post" action="<?= base_url() ?>index.php/Recherche">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="single_newsletter text-md-right text-sm-center wow zoomIn">
                                        <div class="md-form input-group">
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







        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_about_area">
                            <div class="head_title  m-y-3 wow fadeInUp">
                                <center><h3>C'est quoi un code-barre ?</h3></center>
                                <p>Un code bar est un symbole qui peut etre facile
                                   ment lu par un scanner de code barres ou une application smartphone.
                                   Et qui relie un produit aux informations le concernant dans la base de données.
                                    Chaque code-barres est un numéro unique et peux correspondre qu’a un produit dans le monde.</br></br>
                                   Les codes-barres sont le plus souvent utilisés aux caisses de magasins de vente aux détails lors de la
                                    facturation de vos achats Les détaillants utilisent les codes à barres pour retrouver rapidement le nom, 
                                    le prix et les quantités disponibles d’un produit a la caisse et pour suivre les produits tout au long de
                                     la chaine d’approvisionnement. Une fois le code scanner, Les propriétaires de magasins peuvent être 
                                     avertir de l’insuffisance des stocks d’un article particulier, Ce qui les incites a passer une nouvelle 
                                     commande a temps en temps utilisés.</br></br>
                                     Chaque variation d’un produit (par exemple, chaque taille et chaque couleur) nécessite son propre code-barres
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </section><!-- End of About Section-->


        
        <section id="client" class="client">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="main_client_area">
                            <div class="head_title center m-y-3 wow fadeInUp">
                                <h3>Les types de code-barres pour la vente au detail</h3>
                            </div>
                            <div class="main_client_content m-b-3">

                                <div class="carousel carousel-slider">
                                    <div class="carousel-item" >
                                        <div class="single_client_area">
                                            <div class="single_client">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="single_c_img center">
                                                            <img class="img" src="<?= base_url() ?>public/img/code bar2.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single_c_text text-md-left text-xs-center">
                                                            <h4>EAN-13 Barcodes / European Article Numbering</h4>
                                                            <p>European Article Numbering (EAN), comporte 13 chiffres.
                                                               Ils utilisés dans le monde entier sur tous produits de détail, a l’exception des
                                                                livres et des magasins. Ils sont les plus utilisés au monde, à l’exception des 
                                                                Etats-Unis et du Canada ou les codes à barres UPC-A (Universal Product Codes) 
                                                                sont plus courant Chaque EAN-13 est spécifique à un produit et est encodé dans 
                                                                une image de code à barres. Cela signifie que lorsque le code barre est scanné 
                                                                dans les systèmes des magasins, les données relatives aux prix et à l’inventaire 
                                                                de votre produit sont enregistrées. Un numéro EAN-13 différent et donc nécessaire 
                                                                pour chaque produit unique
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_client">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="single_c_img center">
                                                            <img class="img" src="<?= base_url() ?>public/img/code bar2.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single_c_text text-md-left text-xs-center">
                                                            <h4>UPC-A Barcodes</h4>
                                                            <p>Les codes à barre UPC à 12 chiffres sont principalement utilisés aux Etats-Unis 
                                                                et au canada sur tous les produits de détails à l’exception des livres et des 
                                                                magasins. 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div><!-- End of carouser slider -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section><!-- End of client Section -->


        
        <section id="client" class="client">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="main_client_area">
                            <div class="main_client_content m-b-3">

                                <div class="carousel carousel-slider">
                                    <div class="carousel-item" >
                                        <div class="single_client_area">
                                            <div class="single_client">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="single_c_img center">
                                                            <img class="img" src="<?= base_url() ?>public/img/code bar2.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single_c_text text-md-left text-xs-center">
                                                            <h4>ITF-14 Carton & Pallet Barcodes</h4>
                                                            <p>Les codes pour les cartons ITF-14 encore appelés GTIN-14 ou shopping Container 
                                                                Codes (SCC-14) 
                                                             Permettent d’identifier des unités logistiques et sont créés à partir des codes 
                                                             à barres EAN-13
                                                             Et UPC-A. Ils ne sont utilisés que pour le transport et dans les entrepôts sur les
                                                              cartons contenant une quantité spécifique de l’article que le code à barres du 
                                                              produit représenté. Ils ne doivent pas être utilisés pour des produits qui sont
                                                               vendus individuellement au détail. Ce sont des unités logistiques et non 
                                                               commerciales
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single_client">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="single_c_img center">
                                                            <img class="img" src="<?= base_url() ?>public/img/code bar2.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single_c_text text-md-left text-xs-center">
                                                            <h4>ISBN Books Barcodes</h4>
                                                            <p>Les numéros internationaux normalisé pour le livre (ISBN) sont des code-barres 
                                                                pour les livres papier et électroniques. Les ISBN commencent généralement par 
                                                                978 et sont distribués par les agences ISBN de chaque pays <a href="">(voir isbn-interna
                                                                tional.org/agency)</a>. Ils peuvent également être obtenus auprès d’agences d’édi
                                                                tion indépendantes telles que <a href="">bookisbn.org.uk</a>, utilisées par les auteurs qui 
                                                                s’autoéditent
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div><!-- End of carouser slider -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section><!-- End of client Section -->

        <section id="client" class="client">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="main_client_area">
                            <div class="main_client_content m-b-3">

                                <div class="carousel carousel-slider">
                                    <div class="carousel-item" >
                                        <div class="single_client_area">
                                            <div class="single_client">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="single_c_img center">
                                                            <img class="img" src="<?= base_url() ?>public/img/code bar2.png" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="single_c_text text-md-left text-xs-center">
                                                            <h4>ISSN Magazine Barcodes</h4>
                                                            <p>An International Standard Serial Number (ISSN) is a unique 8-digit number
                                                                 used to identify periodical publications such as magazines and journals. 
                                                                 They can be applied for at <a href="">issn.org/services/requesting-an-issn.</a> </br>
                                                            Only Apply for an ISSN if your publications meet the following criteria :</br>
                                                            <li>They are serials (journals, newspapers, magazines, monographie series etc.)</li></br>
                                                            <li>They are ongoing integrating resources (websites, databases etc.) </li></br>

                                                            </p> 
                                                                
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div><!-- End of carouser slider -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section><!-- End of client Section -->

        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_about_area">
                            <div class="head_title  m-y-3 wow fadeInUp">
                                <center><h3>Pourquoi Product List ?</h3></center>
                                <p>
                                Le packaging d’un produit donne toutes les informations utiles mais pas toutes. L’emballage d’un produit ne
                                 vous donnera pas la liste des points de vente ou le trouver (physique ou en ligne), vous n’aurez pas accès 
                                 aux avis de vos consommateurs. Avec Product List vous fournis plus d’informations à vos clients comme : 
                                    le nom du fabriquant, Description du produit, Composition, pays d’origine du produit, ou le trouver,
                                     vos pages sur les réseaux sociaux
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </section><!-- End of About Section-->

        <section id="joinus" class="joinus">
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
                                <a href="<?= base_url() ?>index.php/Produits/ajouterProduit" class="btn btn-danger waves-effect waves-red"><i class="fa fa-plus m-b-1"></i>Ajouter Un Produit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section> <!-- End of JoinUs section -->




        
      



        