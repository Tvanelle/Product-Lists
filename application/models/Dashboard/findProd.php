<?php
class findProd extends CI_Model {
	public function index()
	{
    //print_r('fine');
    $query=$this->db->get_where('produits',array('prodState'=>0));
    return $query->result();
	}
    public function prodOnly($codeBarProd)
    {
        $query=$this->db->get_where('produits',array('codeBarProd'=>$codeBarProd));
        return $query->result();
    }
    public function updateProd($data){

        $codeBarProd=$data['codeBarProd'];
        $dataProd=array( 
            'codeBarProd'=> $data['codeBarProd'],
            'nameProd'=> $data['nameProd'],
            'sellNameProd'=> $data['sellNameProd'],
            'markProd'=> $data['markProd'],
            'descripProd'=> $data['descripProd'],
            'composProd'=> $data['composProd'],
            'useCounsProd'=> $data['useCounsProd'],
            'originCountryProd'=> $data['originCountryProd'],
            'FormatProd'=> $data['FormatProd'],
            'priceProd'=> $data['priceProd'],
            'autorisationProd'=> $data['autorisationProd'],
            
            'urlFacebook'=> $data['urlFacebook'],
            'urlTwiter'=> $data['urlTwiter'],
            'urlYoutube'=> $data['urlYoutube'],
            'urlPinterest'=> $data['urlPinterest'],
            
            'adressePvte'=>$data['adressePvte'],
            'telSitePvte'=>$data['telSitePvte'],
            'nomPvte'=>$data['nomPvte'], 
            
            'imgProd' => $data['imgProd'],
            'videoProd' => $data['videoProd'],

            'emailMaker'=>$data['emailMaker'],
            'adresseMaker'=>$data['adresseMaker'],
            'telMaker1'=>$data['telMaker1'],
            'telMaker2'=>$data['telMaker2'],
            'siteMaker'=>$data['siteMaker'],
            'nameMaker'=>$data['nameMaker'],

            //'nameCategory'=>$data['idCategory'],

            'emailMakerE'=>$data['emailMakerE'],
            'adresseMakerE'=>$data['adresseMakerE'],
            'telMaker1E'=>$data['telMaker1E'],
            'nameMakerE'=>$data['nameMakerE'],
         );
         $this->db->where('codeBarProd', $codeBarProd);
         $this->db->replace('produits', $data);
        
    }
}