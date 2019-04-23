<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    function __construct()
    {
        parent::__construct();        
        $this->load->model("maeen");
    }
    
    public function login()
	{
		$this->load->view('main/login');
    }

    public function index()
	{
		$this->load->view('main/main');
    }
    
    function ActLogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => ($password)
            );
        $cek = $this->db->get_where("user",$where);
        if($cek->num_rows() > 0){
    
            $data_session = array(
                'nama' => $username,
                'fullname' => $cek->result()[0]->fullname,
                'status' => "login"
                );
    
            $this->session->set_userdata($data_session);
    
            redirect("Dashboard");
        }else{
            echo "Username dan password salah !";
        }
    }

    public function route()
	{
        $data = [
            'dataRoute' => $this->db->get('routes')->result()
        ];
        $this->load->view('main/route',$data);
    }

    public function cariResi()
    {
        $this->load->view('main/searchtrack');
    }

    public function detailTrack()
    {
        $resi = $this->input->post('track');
        $id = $this->db->get_where('orderlogistik',['nomor_resi'=>$resi])->result();
        if($id != null){
            $data = [
                'dataOrder' => $this->maeen->getDataOrder($id[0]->id),
            ];
        $this->load->view('main/resultResi',$data);            
        }else{
            redirect('main/cariResi');
        }
        
}