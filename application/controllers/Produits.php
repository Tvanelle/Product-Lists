<?php
class Produits extends CI_Controller{
    public function ajouterProduit(){

        $this->fv->set_rules('codeBarProd','Saisir un code bar comportant soit 12 soit 13 chiffres','trim|required|min_length[12]|max_length[13]');
        if ($this->fv->run()==TRUE) {
            $codeBarProd=$this->input->post('codeBarProd');
            if (strlen($codeBarProd)<13) {
                $codeBarProd='0'.$codeBarProd;
            }
             else {
                 $codeBarProd=$codeBarProd;
             }
            //Recuperation de la valeur des champs hidden qui contiennet le nombre d'element a recuperer
             echo $codeBarProd;
            $countData= $this->input->post('countData'); //recuperation du nombre d'images
            $countDataVid= $this->input->post('countDataVid'); //recuperation du nombre de videos
            $countDataUrl= $this->input->post('countDataUrl'); //recuperation du nombre d'url
            $countDataCount= $this->input->post('countDataCount'); //recuperation du nombre de pays
            $countDataCity= $this->input->post('countDataCity'); //recuperation du nombre de ville
            $countDataAddress= $this->input->post('countDataAddress'); //recuperation du nombre d'adresse
            $idCategory= $this->input->post('idCategory'); 
            echo $countData;

            //Recuperation des images

            $img='';
            for ($i=1; $i < $countData+1 ; $i++) { 
                $config [ 'upload_path' ]           =  './uploads/' ; 
                $config [ 'allowed_types' ]         =  'gif|jpg|png' ; 
                $config [ 'taille_max' ]              = 2000  ; 
                $config [ 'max_width' ]             = 1024  ; 
                $config [ 'max_height' ]            = 768  ;
                $this -> load -> library ( 'upload' ,  $config );
                if  (!$this -> upload -> do_upload ("image$i")) 
                { 
                        $error  =  array ( 'error'  =>  $this -> upload -> display_errors ());
                        $this -> load -> view ( 'header'); 
                        $this -> load -> view ( 'addProd' ,  $error ); 
                        $this -> load -> view ( 'footer'); 
                } 
                else 
                { 
                    $img .= $this -> upload -> data ( 'file_name' );
                    $img .='|';
                }      
            }

            $video='';
            for ($i=1; $i < $countDataVid+1 ; $i++) {
                $video .= $this->input->post("video$i");
                $video .='|';
            }
            $url=''; 
            for ($i=2; $i < $countDataUrl+1 ; $i++) {
                $url .= $this->input->post("url$i");
                $url .='';
            }
            $adressePtVte = '';
            for ($i=1; $i < $countDataAddress+1 ; $i++) {
                $adressePtVte .=$this->input->post("adressePtVte$i");
                $adressePtVte .='|';
            }  
            $data=array(
                 'codeBarProd'=>$codeBarProd,
                 'nameProd'=>$this->input->post('nameProd'),
                 'sellNameProd'=>$this->input->post('sellNameProd'), 
                 'markProd'=>$this->input->post('markProd'),
                 'descripProd'=>$this->input->post('descripProd'),
                 'composProd'=>$this->input->post('composProd'),
                 'useCounsProd'=>$this->input->post('useCounsProd'),
                 'originCountryProd'=>$this->input->post('originCountryProd'),
                 'FormatProd'=>$this->input->post('FormatProd'),
                 'priceProd'=>$this->input->post('priceProd'),
                 'img'=>$img,
                 'autorisationProd'=>$this->input->post('autorisationProd'),

                 'video'=>$video,
                 'urlFacebook'=>$this->input->post('urlFacebook'),
                 'urlTwiter'=>$this->input->post('urlTwiter'),
                 'urlYoutube'=>$this->input->post('urlYoutube'),
                 'urlPinterest'=>$this->input->post('urlPinterest'),
                 //'url'=>$url,

                 'adressePtVte'=>$adressePtVte,
                 'nomPtVte'=>$this->input->post('nomPtVte'),
                 'telSitePtVte'=>$this->input->post('telSitePtVte'),

                 'emailMaker'=>$this->input->post('emailMaker'),
                 'adresseMaker'=>$this->input->post('adresseMaker'),
                 'telMaker1'=>$this->input->post('telMaker1'),
                 'telMaker2'=>$this->input->post('telMaker2'),
                 'siteMaker'=>$this->input->post('siteMaker'),
                 'nameMaker'=>$this->input->post('nameMaker'),
                 'idCategory'=>$idCategory,
                 'emailMakerE'=>$this->input->post('emailMaker'),
                 'adresseMakerE'=>$this->input->post('adresseMaker'),
                 'telMaker1E'=>$this->input->post('telMaker1'),
                 'nameMakerE'=>$this->input->post('nameMaker'),
              );
              var_dump($data);
              $_SESSION["emailMaker"]=$this->input->post('emailMaker');
              $_SESSION["adresseMaker"]=$this->input->post('adresseMaker');
              $_SESSION["telMaker1"]=$this->input->post('telMaker1');
              $_SESSION["telMaker2"]=$this->input->post('telMaker2');
              $_SESSION["siteMaker"]=$this->input->post('siteMaker');
              $_SESSION["nameMaker"]=$this->input->post('nameMaker');
              $this->load->model('insertData');
              $this->insertData->addProd($data);
              $this->load->view('success');
              var_dump($data);
         }
        else {
             //$this->load->view('header');
             $this->load->view('addProd'); 
             //  $this->load->view('footer'); 
        }
	
    }

    public function ajouterProduitIsbn(){

        $this->fv->set_rules('codeBarProd','Saisir un code bar comportant soit 12 soit 13 chiffres','trim|required|min_length[12]|max_length[13]');
        if ($this->fv->run()==TRUE) {
            $codeBarProd=$this->input->post('codeBarProd');
            if (strlen($codeBarProd)<13) {
                $codeBarProd='0'.$codeBarProd;
            }
             else {
                 $codeBarProd=$codeBarProd;
             }
            //Recuperation de la valeur des champs hidden qui contiennet le nombre d'element a recuperer
             echo $codeBarProd;
            $countDataBn= $this->input->post('countDataBn'); //recuperation du nombre d'images
            $countDataVidBn= $this->input->post('countDataVidBn'); //recuperation du nombre de videos
            $countDataUrlBn= $this->input->post('countDataUrlBn'); //recuperation du nombre d'url
            $countDataCountBn= $this->input->post('countDataCountBn'); //recuperation du nombre de pays
            $countDataCityBn= $this->input->post('countDataCityBn'); //recuperation du nombre de ville
            $countDataAddressBn= $this->input->post('countDataAddressBn'); //recuperation du nombre d'adresse
            $countAut= $this->input->post('countAut'); //recuperation du nombre d'adresse
            $idCategory= $this->input->post('idCategory'); 
            $img='';
            for ($i=1; $i < $countDataBn+1 ; $i++) { 
                $config [ 'upload_path' ]           =  './uploads/' ; 
                $config [ 'allowed_types' ]         =  'gif|jpg|png' ; 
                $config [ 'taille_max' ]              = 2000  ; 
                $config [ 'max_width' ]             = 1024  ; 
                $config [ 'max_height' ]            = 768  ;
                $this -> load -> library ( 'upload' ,  $config );
                if  (!$this -> upload -> do_upload ("image$i")) 
                { 
                        $error  =  array ( 'error'  =>  $this -> upload -> display_errors ()); 
                        $this -> load -> view ( 'addProd' ,  $error );  
                } 
                else 
                { 
                    $img .= $this -> upload -> data ( 'file_name' );
                    $img .='|';
                }   
            }
            $video='';
            for ($i=1; $i < $countDataVidBn+1 ; $i++) {
                $video .= $this->input->post("video$i");
                $video .='|';
            }
            $url=''; 
            for ($i=2; $i < $countDataUrlBn+1 ; $i++) {
                $url .= $this->input->post("url$i");
                $url .='';
            }
            $autName = '';
            for ($i=1; $i < $countAut+1 ; $i++) {
                $autName .=$this->input->post("autName$i");
                $autName .='|';
            }  

            $adressePtVte = '';
            for ($i=1; $i < $countDataAddressBn+1 ; $i++) {
                $adressePtVte .=$this->input->post("adressePtVte$i");
                $adressePtVte .='|';
            }  
            var_dump($img); 
            $data=array(
                 'codeBarProd'=>$codeBarProd,
                 'nameProd'=>$this->input->post('nameProd'),
                 'sellNameProd'=>$autName, 
                 'markProd'=>$this->input->post('markProd'),
                 'descripProd'=>$this->input->post('descripProd'),
                 'composProd'=>$this->input->post('composProd'),
                 'useCounsProd'=>$this->input->post('useCounsProd'),
                 'originCountryProd'=>$this->input->post('originCountryProd'),
                 'FormatProd'=>$this->input->post('FormatProd'),
                 'priceProd'=>$this->input->post('priceProd'),
                 'img'=>$img,
                 'autorisationProd'=>'',

                 'video'=>$video,
                 'urlFacebook'=>$this->input->post('urlFacebook'),
                 'urlTwiter'=>$this->input->post('urlTwiter'),
                 'urlYoutube'=>$this->input->post('urlYoutube'),
                 'urlPinterest'=>$this->input->post('urlPinterest'),
                 //'url'=>$url,

                 'adressePtVte'=>$adressePtVte,
                 'nomPtVte'=>$this->input->post('nomPtVte'),
                 'telSitePtVte'=>$this->input->post('telSitePtVte'),

                 'emailMaker'=>$this->input->post('emailMaker'),
                 'adresseMaker'=>$this->input->post('adresseMaker'),
                 'telMaker1'=>$this->input->post('telMaker1'),
                 'telMaker2'=>'',
                 'nameMaker'=>$this->input->post('nameMaker'),
                 'siteMaker'=>'',
                 'idCategory'=>$idCategory,

                 'emailMakerE'=>'',
                 'adresseMakerE'=>'',
                 'telMaker1E'=>'',
                 'nameMakerE'=>'',
              );var_dump($data);
              $_SESSION["emailMaker"]=$this->input->post('emailMaker');
              $_SESSION["adresseMaker"]=$this->input->post('adresseMaker');
              $_SESSION["telMaker1"]=$this->input->post('telMaker1');
              $_SESSION["telMaker2"]=$this->input->post('telMaker2');
              $_SESSION["siteMaker"]=$this->input->post('siteMaker');
              $_SESSION["nameMaker"]=$this->input->post('nameMaker');
              $this->load->model('insertData');
              $this->insertData->addProd($data);
              $this->load->view('success');
              var_dump($error);
         }
        else {
             //$this->load->view('header');
             $this->load->view('addProd'); 
             //  $this->load->view('footer'); 
        }
	
    }
   
    
    public function ajouterProduitIssn(){

        $this->fv->set_rules('codeBarProd','Saisir un code bar comportant soit 12 soit 13 chiffres','trim|required|min_length[12]|max_length[13]');
        if ($this->fv->run()==TRUE) {
            $codeBarProd=$this->input->post('codeBarProd');
            if (strlen($codeBarProd)<13) {
                $codeBarProd='0'.$codeBarProd;
            }
             else {
                 $codeBarProd=$codeBarProd;
             }
            //Recuperation de la valeur des champs hidden qui contiennet le nombre d'element a recuperer
            echo $codeBarProd;
            $countDataSn= $this->input->post('countDataSn'); //recuperation du nombre d'images
            $countDataVidSn= $this->input->post('countDataVidSn'); //recuperation du nombre de videos
            $countDataUrlSn= $this->input->post('countDataUrlSn'); //recuperation du nombre d'url
            $countDataCountSn= $this->input->post('countDataCountSn'); //recuperation du nombre de pays
            $countDataCitySn= $this->input->post('countDataCitySn'); //recuperation du nombre de ville
            $countDataAddressSn= $this->input->post('countDataAddressSn'); //recuperation du nombre d'adresse
            $countAutSn= $this->input->post('countAutSn'); //recuperation du nombre d'adresse
            $idCategory= $this->input->post('idCategory'); 
            $img='';
            for ($i=1; $i < $countDataSn+1 ; $i++) { 
                $config [ 'upload_path' ]           =  './uploads/' ; 
                $config [ 'allowed_types' ]         =  'gif|jpg|png' ; 
                $config [ 'taille_max' ]              = 2000  ; 
                $config [ 'max_width' ]             = 1024  ; 
                $config [ 'max_height' ]            = 768  ;
                $this -> load -> library ( 'upload' ,  $config );
                if  (!$this -> upload -> do_upload ("image$i")) 
                { 
                        $error  =  array ( 'error'  =>  $this -> upload -> display_errors ());
                        $this -> load -> view ('header'); 
                        $this -> load -> view ('addProd' , $error ); 
                        $this -> load -> view ('footer'); 
                } 
                else 
                { 
                    $img .= $this -> upload -> data ( 'file_name' );
                    $img .='|';
                }   
            }
            $video='';
            for ($i=1; $i < $countDataVidSn+1 ; $i++) {
                $video .= $this->input->post("video$i");
                $video .='|';
            }
            $url=''; 
            for ($i=2; $i < $countDataUrlSn+1 ; $i++) {
                $url .= $this->input->post("url$i");
                $url .='';
            }
            $autName = '';
            for ($i=1; $i < $countAutSn+1 ; $i++) {
                $autName .=$this->input->post("autName$i");
                $autName .='|';
            }  

            $adressePtVte = '';
            for ($i=1; $i < $countDataAddressSn+1 ; $i++) {
                $adressePtVte .=$this->input->post("adressePtVte$i");
                $adressePtVte .='|';
            }  
            //var_dump($error);
            $data=array(
                 'codeBarProd'=>$codeBarProd,
                 'nameProd'=>$this->input->post('nameProd'),
                 'sellNameProd'=>$autName, 
                 'markProd'=>$this->input->post('markProd'),
                 'descripProd'=>$this->input->post('descripProd'),
                 'composProd'=>$this->input->post('composProd'),
                 'useCounsProd'=>$this->input->post('useCounsProd'),
                 'originCountryProd'=>$this->input->post('originCountryProd'),
                 'FormatProd'=>$this->input->post('FormatProd'),
                 'priceProd'=>$this->input->post('priceProd'),
                 'img'=>$img,
                 'autorisationProd'=>'',

                 'video'=>$video,
                 'urlFacebook'=>$this->input->post('urlFacebook'),
                 'urlTwiter'=>$this->input->post('urlTwiter'),
                 'urlYoutube'=>$this->input->post('urlYoutube'),
                 'urlPinterest'=>$this->input->post('urlPinterest'),
                 //'url'=>$url,

                 'adressePtVte'=>$adressePtVte,
                 'nomPtVte'=>$this->input->post('nomPtVte'),
                 'telSitePtVte'=>$this->input->post('telSitePtVte'),

                 'emailMaker'=>$this->input->post('emailMaker'),
                 'adresseMaker'=>$this->input->post('adresseMaker'),
                 'telMaker1'=>$this->input->post('telMaker1'),
                 'telMaker2'=>'',
                 'nameMaker'=>$this->input->post('nameMaker'),
                 'siteMaker'=>'',
                 'idCategory'=>$idCategory,

                 'emailMakerE'=>'',
                 'adresseMakerE'=>'',
                 'telMaker1E'=>'',
                 'nameMakerE'=>'',
              );
              $_SESSION["emailMaker"]=$this->input->post('emailMaker');
              $_SESSION["adresseMaker"]=$this->input->post('adresseMaker');
              $_SESSION["telMaker1"]=$this->input->post('telMaker1');
              $_SESSION["telMaker2"]=$this->input->post('telMaker2');
              $_SESSION["siteMaker"]=$this->input->post('siteMaker');
              $_SESSION["nameMaker"]=$this->input->post('nameMaker');
              $this->load->model('insertData');
              $this->insertData->addProd($data);
              $this->load->view('success');
              var_dump($data);
         }
        else {
             //$this->load->view('header');
             $this->load->view('addProd'); 
             //  $this->load->view('footer'); 
        }
	
    }
    public function addFormIsbn()
    {
        $this->load->view('addProdIsbn');
    }
    public function addFormEan()
    {
        $this->load->view('addProd');
    }
    public function addFormIssn()
    {
        $this->load->view('addProdIssn');
    }
}