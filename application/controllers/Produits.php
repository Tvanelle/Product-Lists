<?php
class Produits extends CI_Controller{
    public function ajouterProduit(){
        $this->fv->set_rules('codeBarProd','','required');
        if ($this->fv->run()==TRUE) {
            $codeBarProd=$this->input->post('codeBarProd');

            //Recuperation de la valeur des champs hidden qui contiennet le nombre d'element a recuperer

            $countData= $this->input->post('countData'); //recuperation du nombre d'images
            $countDataVid= $this->input->post('countDataVid'); //recuperation du nombre de videos
            $countDataUrl= $this->input->post('countDataUrl'); //recuperation du nombre d'url
            $countDataCount= $this->input->post('countDataCount'); //recuperation du nombre de pays
            $countDataCity= $this->input->post('countDataCity'); //recuperation du nombre de ville
            $countDataAddress= $this->input->post('countDataAddress'); //recuperation du nombre d'adresse
          
            for ($i=1; $i < $countData+1 ; $i++) { 
                $img= $this->input->post('image'.$i);
                $imgData= array(
                    'img'=>$img
                );
              $this->load->model('insertData');
              $this->insertData->addImg($imgData);
            }
            
            for ($i=1; $i < $countDataVid+1 ; $i++) {
                $video= $this->input->post('video'.$i);
                echo $video;
                $videoData = array(
                    'video'=> $video
                );
                var_dump($videoData);
                 $this->load->model('insertData');
                 $this->insertData->addVideo($videoData);
            }
            
            for ($i=2; $i < $countDataUrl+1 ; $i++) {
               
                $url= $this->input->post('url'.$i);
                echo $url;
                $urlData= array(
                    'url'=>$url
                );
                 $this->load->model('insertData');
                 $this->insertData->addUrl($urlData);
            }
            
            for ($i=1; $i < $countDataCount+1 ; $i++) {
               
                $paysPtVte= $this->input->post('paysPtVte'.$i);
                echo $paysPtVte;
                $data= array(
                    'paysPtVte'=>$paysPtVte
                );
                 $this->load->model('insertData');
                 $this->insertData->addPaysPtVte($data);
            }
            
            for ($i=1; $i < $countDataCity+1 ; $i++) {
               
                $villePtVte= $this->input->post('villePtVte'.$i);
                echo $villePtVte;
                $dataVille= array(
                    'villePtVte'=>$villePtVte
                );
                 $this->load->model('insertData');
                 $this->insertData->addVillePtVte($dataVille);
            }
            
            for ($i=1; $i < $countDataAddress+1 ; $i++) {
               
                $adressePtVte= $this->input->post('adressePtVte'.$i);
                echo $adressePtVte;
                $dataAddress= array(
                    'adressePtVte'=>$adressePtVte
                );
                 $this->load->model('insertData');
                 $this->insertData->addAdressePtVte($dataAddress);
            }

            $data=array(
                'codeBarProd'=>$this->input->post('codeBarProd'),
                'nameProd'=>$this->input->post('nameProd'),
                'sellNameProd'=>$this->input->post('sellNameProd'), 
                'markProd'=>$this->input->post('markProd'),
                'descripProd'=>$this->input->post('descripProd'),
                'composProd'=>$this->input->post('composProd'),
                'useCounsProd'=>$this->input->post('useCounsProd'),
                'originCountryProd'=>$this->input->post('originCountryProd'),
                'FormatProd'=>$this->input->post('FormatProd'),
                'priceProd'=>$this->input->post('priceProd'),
                'autorisationProd'=>$this->input->post('autorisationProd'),
                
                'urlFacebook'=>$this->input->post('urlFacebook'),
                'urlTwiter'=>$this->input->post('urlTwiter'),
                'urlYoutube'=>$this->input->post('urlYoutube'),
                'urlPinterest'=>$this->input->post('urlPinterest'),
                
                'nomPtVte'=>$this->input->post('nomPtVte'),
                'telSitePtVte'=>$this->input->post('telSitePtVte'),
             );
             $this->load->model('insertData');
             $this->insertData->addProd($data);
        }
        else {
             $this->load->view('header');
             $this->load->view('addProd'); 
             $this->load->view('footer'); 
        }
	
    }
    
}