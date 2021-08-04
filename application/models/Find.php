<?php
class Find extends CI_Model{
    public function findProd($data)
    {
        $codeBarProd=$data['codeBarProd'];
        $query=$this->db->get_where('produits',array('codeBarProd'=>$codeBarProd));
        #var_dump($query->result());
        return $query->result();
    }
}