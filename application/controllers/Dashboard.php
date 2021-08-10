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
		# code...
	}
}