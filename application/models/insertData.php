<?php
class insertData extends CI_Model{
    
    public function addProd($data)
    {
        $dataimg=array(
            'nameImg' => $data['img'],
            'codeBarProd'=>$data['codeBarProd']
        );
        $query=$this->db->insert('images', $dataimg);

        $dataVid=array(
            'nameVideo' => $data['video'],
            'codeBarProd'=>$data['codeBarProd']
        );
        $query=$this->db->insert('videos', $dataVid);

        /*$dataUrl=array(
            'nameUrl'=>$data["url"],
            'codeBarProd'=>$data['codeBarProd']
        );
        $query=$this->db->insert('urlMaker', $dataUrl);
*/
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

            
         );
         $query=$this->db->insert('produits', $dataProd);

    }


    /*public function changeStatus()
    {
        $stateProd=array(
                  'prodState'=>1,
              );
              $this->db->replace('produits', $stateProd);
    }*/
}