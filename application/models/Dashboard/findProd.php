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
}