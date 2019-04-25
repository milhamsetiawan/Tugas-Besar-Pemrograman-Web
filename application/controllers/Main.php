<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    function __construct()
    {
        parent::__construct();        
        $this->load->model('Getter');
    }
    public function login()
	{
		$this->load->view('main/login');
    }
    public function index()
	{
		$this->load->view('main/main');
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

    public function editRoute($id)
    {
        $data = [
            'dataRoute' => $this->db->get_where('routes',['id'=>$id])->result()[0]
        ];
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/editRoute',$data);
		$this->load->view('dashboard/bottom');
    }

    public function addrouteP()
    {
        $data = [
            'kota_pengirim' => $this->input->post('kota_pengirim'),
            'kota_penerima' => $this->input->post('kota_penerima'),
            'fare' => $this->input->post('fare')
        ];
        $this->db->insert('routes',$data);
        redirect('Dashboard/route');
    }

    public function adduserP()
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'fullname' => $this->input->post('fullname'),
            'role' => $this->input->post('role')
        ];
        $this->db->insert('user',$data);
        redirect('Dashboard/user');
    }

    public function edituserP($id)
    {
        $data = [
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'fullname' => $this->input->post('fullname'),
            'role' => $this->input->post('role')
        ];
        $this->db->update('user',$data,['id'=>$id]);
        redirect('Dashboard/user');
    }

    public function editUser($id)
    {
        $data = [
            'dataUser' => $this->db->get_where('user',['id'=>$id])->result()[0]
        ];
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/editUser',$data);
		$this->load->view('dashboard/bottom');
    }

    public function editrouteP($id)
    {
        $data = [
            'kota_pengirim' => $this->input->post('kota_pengirim'),
            'kota_penerima' => $this->input->post('kota_penerima'),
            'fare' => $this->input->post('fare')
        ];
        $this->db->update('routes',$data,['id' => $id]);
        redirect('Dashboard/route');
    }
    
    public function valJumbo($id)
    {
       $data = $this->db->get_where('routes',['id'=>$id])->result();
       echo "<div class='jumbotron'><h1>(Kota Pengirim)".$data[0]->kota_pengirim." -> (Kota Penerima)".$data[0]->kota_penerima."</h1></div>";
    }

    public function deleteRoute($id)
    {
        if($id){
            $this->db->delete('routes',['id' => $id]);
        }
        redirect('Dashboard/Route');
    }    
}
