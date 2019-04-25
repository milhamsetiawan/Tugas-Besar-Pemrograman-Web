<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();        
        $this->load->model("Getter");
		if($this->session->userdata('status') != "login"){
			redirect('Main/login');
		}
    }
    public function index()
	{
        $data = [
            'jumlahOrder' => count($this->db->get('orderlogistik')->result())
        ];
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/main',$data);
		$this->load->view('dashboard/bottom');
    }
    function logout(){
        $this->session->sess_destroy();
        redirect('Main/login');
    }
    public function updateResi()
	{
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/updateResi');
		$this->load->view('dashboard/bottom');
    }
    
    public function order()
	{
        $data = [
            'dataOrder' => $this->Getter->getAllDataOrder()
        ];
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/mainOrder',$data);
		$this->load->view('dashboard/bottom');
    }
    public function detailTrack($id)
	{
        $data = [
            'dataOrder' => $this->Getter->getDataOrder($id),
        ];
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/detailTrack',$data);
		$this->load->view('dashboard/bottom');
    }
    
    public function addOrder()
	{
        $data = [
            'dataRoute' => $this->db->get('routes')->result()
        ];
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/addOrder',$data);
        $this->load->view('dashboard/bottom');
    }
    
    
    public function addRoute()
	{
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/addRoute');
		$this->load->view('dashboard/bottom');
    }
    public function addUser()
	{
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/addUser');
		$this->load->view('dashboard/bottom');
    }
    public function user()
	{
        $data = [
            'dataUser' => $this->db->get('user')->result()
        ];
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/user',$data);
		$this->load->view('dashboard/bottom');
    }
    public function route()
	{
        $data = [
            'dataRoute' => $this->db->get('routes')->result()
        ];
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/route',$data);
		$this->load->view('dashboard/bottom');
    }
}
