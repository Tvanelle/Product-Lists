<?php
class Dashboard extends CI_Controller {
	public function index()
	{
    
		$this->load->model('Dashboard/findProd');
		$data = $this->findProd->index();
		$this->load->view('Dashboard/index',array('data'=>$data));
	
	}
	public function showForm($codeBarProd)
	{
		$this->load->model('Dashboard/findProd');
		$data = $this->findProd->prodOnly($codeBarProd);
		$this->load->view('Dashboard/formProd',array('data'=>$data));
	}
	public function updateProd()
	{
		    $countData= $this->input->post('countData'); //recuperation du nombre d'images
            $countDataVid= $this->input->post('countDataVid'); //recuperation du nombre de videos
            $countDataUrl= $this->input->post('countDataUrl'); //recuperation du nombre d'url
            $countDataCount= $this->input->post('countDataCount'); //recuperation du nombre de pays
            $countDataCity= $this->input->post('countDataCity'); //recuperation du nombre de ville
            $countDataAddress= $this->input->post('countDataAddress'); //recuperation du nombre d'adresse
			$nbImg=$this->input->post('nbImage');
            $img='';
			for ($i=0; $i < $nbImg ; $i++) { 
				$img .='|'. $this->input->post("imager$i");
			}
            for ($i=1; $i < $countData+1 ; $i++) { 
                    $img .='|'. $this->input->post("image$i");
                    $img .='';
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
		$codeBarProd=$this->input->post('codeBarProd');
		$data=array(
			'codeBarProd'=>$codeBarProd,
			'nameProd'=>$this->input->post('codeBarProd'),
			'sellNameProd'=>$this->input->post('sellNameProd'), 
			'markProd'=>$this->input->post('markProd'),
			'descripProd'=>$this->input->post('descripProd'),
			'composProd'=>$this->input->post('composProd'),
			'useCounsProd'=>$this->input->post('useCounsProd'),
			'originCountryProd'=>$this->input->post('originCountryProd'),
			'FormatProd'=>$this->input->post('FormatProd'),
			'priceProd'=>$this->input->post('priceProd'),
			'imgProd'=>$img,
			'autorisationProd'=>$this->input->post('autorisationProd'),

			'videoProd'=>$video,
			'urlFacebook'=>$this->input->post('urlFacebook'),
			'urlTwiter'=>$this->input->post('urlTwiter'),
			'urlYoutube'=>$this->input->post('urlYoutube'),
			'urlPinterest'=>$this->input->post('urlPinterest'),
			//'url'=>$url,

			//'adressePtVte'=>$adressePtVte,
			'nomPvte'=>$this->input->post('nomPtVte'),
			'telSitePvte'=>$this->input->post('telSitePtVte'),

			'emailMaker'=>$this->input->post('emailMaker'),
			'adresseMaker'=>$this->input->post('adresseMaker'),
			'telMaker1'=>$this->input->post('telMaker1'),
			'telMaker2'=>$this->input->post('telMaker2'),
			'siteMaker'=>$this->input->post('siteMaker'),
			
		 );
		 var_dump($data);
		$this->load->model('Dashboard/findProd');
		$this->findProd->updateProd($data);
	}
}