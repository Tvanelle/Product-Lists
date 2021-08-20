<?php
class insertData extends CI_Model{
    
    public function addProd($data)
    {
      
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
            
            'adressePvte'=>$data['adressePtVte'],
            'telSitePvte'=>$data['telSitePtVte'],
            'nomPvte'=>$data['nomPtVte'], 
            
            'imgProd' => $data['img'],
            'videoPRod' => $data['video'],

            'emailMaker'=>$data['emailMaker'],
            'adresseMaker'=>$data['adresseMaker'],
            'telMaker1'=>$data['telMaker1'],
            'telMaker2'=>$data['telMaker2'],
            'siteMaker'=>$data['siteMaker'],
            'nameMaker'=>$data['nameMaker'],

            'nameCategory'=>$data['idCategory'],

            'emailMakerE'=>$data['emailMakerE'],
            'adresseMakerE'=>$data['adresseMakerE'],
            'telMaker1E'=>$data['telMaker1E'],
            'nameMakerE'=>$data['nameMakerE'],
         );
         $query=$this->db->insert('produits', $dataProd);
        
        /*$dataUrl=array(
            'nameUrl'=>$data["url"],
            'codeBarProd'=>$data['codeBarProd']
        );
        $query=$this->db->insert('urlMaker', $dataUrl);
*/
    }


    /*public function updateProd($codeBarProd)
    {
        $user = $this->ion_auth->user()->row();
        $data=array(
                  'emailMaker'=>$user,
              );
              $this->db->where('codeBarProd', $codeBarProd);
              $this->db->replace('produits', $data);
    }*/
}