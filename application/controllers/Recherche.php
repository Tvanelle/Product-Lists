<?php
class Recherche extends CI_Controller{
    public function index()
    {
        $this->fv->set_rules(
            'codeBarProd','Vous devez saisir un code bar','required'
        );
        if ($this->fv->run()===TRUE) {
            $codeBarProd=$this->input->post('codeBarProd');
            $data=array('codeBarProd'=>$codeBarProd);
            $this->load->model('Find'); 
            $keep=$this->Find->findProd($data);
            $this->load->view('header');
            $this->load->view('detailsProd',array('keep'=>$keep));
            $this->load->view('footer');
        }
        else {
        $this->load->view('index');
		$this->load->view('header'); 
		$this->load->view('footer'); 
        }
    } 
}