<?php
class insertData extends CI_Model{
    public function addImg($imgData)
    {
        $data=array(
            'nameImg' => $imgData['img']
        );
        $query=$this->db->insert('images', $data);
    }
    public function addVideo($videoData)
    {
        $data=array(
            'nameVideo' => $videoData['video']
        );
        $query=$this->db->insert('videos', $data);
    }
    public function addUrl($urlData)
    {
        $data=array(
            'nameUrl'=>$urlData["url"]
        );
        $query=$this->db->insert('urlMaker', $data);
    }
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
            
         );
         $query=$this->db->insert('produits', $dataProd);

    }
    public function addPaysPtVte($data)
    {
        $datePtVte=array(
            'paysPtVte'=>$data['paysPtVte'],
         );
         $query=$this->db->insert('pointvente', $datePtVte);
    }

    public function addVillePtVte($dataVille)
    {
        $datePtVte=array(
                'villePtVte'=>$dataVille['villePtVte'],
             );
             $query=$this->db->insert('pointvente', $datePtVte);
    }
    public function addAdressePtVte($dataAddress)
    {
        $datePtVte=array(
                  'adressePtVte'=>$dataAddress['adressePtVte'],
              );
              $query=$this->db->insert('pointvente', $datePtVte);
    }
}