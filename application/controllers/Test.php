<?php
header('Access-Control-Allow-Origin: *'); 
defined('BASEPATH') OR exit('No direct script access allowed');
class Test extends CI_Controller{
    public function testProd(){
        
             $this->load->view('header');
            
    }
    
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
 echo $this->input->post('sellNameProd');
$this->load->model('insertData');
$this->insertData->addProd($data);

}








