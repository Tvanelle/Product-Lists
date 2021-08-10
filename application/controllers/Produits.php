<?php
class Produits extends CI_Controller{
    public function ajouterProduit(){

        $this->fv->set_rules('codeBarProd','','trim|required|min_length[12]|max_length[13]');
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
            $img='';
            for ($i=1; $i < $countData+1 ; $i++) { 
                $img .= $this->input->post("image$i");
                $img .='|';
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
            }  echo 'POINT : '.$adressePtVte;
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
              );
              $_SESSION["emailMaker"]=$this->input->post('emailMaker');
              $_SESSION["adresseMaker"]=$this->input->post('adresseMaker');
              $_SESSION["telMaker1"]=$this->input->post('telMaker1');
              $_SESSION["telMaker2"]=$this->input->post('telMaker2');
              $_SESSION["siteMaker"]=$this->input->post('siteMaker');
              $this->load->model('insertData');
              $this->insertData->addProd($data);
              redirect('auth/create_user');
              //var_dump($data);
         }
        else {
             //$this->load->view('header');
             $this->load->view('addProd'); 
             //  $this->load->view('footer'); 
        }
	
    }
    
}