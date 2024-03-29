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

    public function deleteUser($id)
    {
        if($id){
            $this->db->delete('user',['id' => $id]);
        }
        redirect('Dashboard/User');
    }

    public function updateResiP()
    {
        $noresi = $this->input->post('noresi');
        print_r($noresi);
        $id = $this->Getter->getIDbyResi($noresi);
        if($id != NULL){
            $data = [
                'message' => $this->input->post('message'),
                'idOrder' => $id[0]->id
            ];
                if($this->input->post('status') == 'diterima'){
                    $this->db->set('tanggal_diterima','NOW()',false);
                    $this->db->update('orderlogistik',['status' => $this->input->post('status')],['nomor_resi' => $noresi]);
                }else{
                    $this->db->update('orderlogistik',['status' => $this->input->post('status')],['nomor_resi' => $noresi]);
                }
            $this->db->insert('historyorder',$data);
        }
        redirect('Dashboard/Order');
    }

    public function addOrderP()
    {
        $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
        $data = [
            'nama_pengirim' => $this->input->post('nama_pengirim'),
            'nomor_resi' => strtoupper('LOG'.$s),
            'alamat_penerima' => $this->input->post('alamat_penerima'),
            'nama_penerima' => $this->input->post('nama_penerima'),
            'nohp_penerima' => $this->input->post('nohp_penerima'),
            'nama_pengirim' => $this->input->post('nama_pengirim'),
            'nohp_pengirim' => $this->input->post('nohp_pengirim'),
            'status' => 'diproses',
            'berat' => $this->input->post('berat'),
            'routes' => $this->input->post('routes'),
        ];
        $this->db->set('tanggal_dikirim', 'NOW()', FALSE);
        $this->db->insert('orderlogistik', $data);
        $lastid = $this->db->insert_id();
        $data2 = [
            'idOrder' => $lastid,
            'message' => 'Data Diterima , menunggu pengiriman'
        ];
        $this->db->insert('historyorder',$data2);
        redirect('Dashboard/Order');
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

    public function deleteRoute($id)
    {
        if($id){
            $this->db->delete('routes',['id' => $id]);
        }
        redirect('Dashboard/Route');
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

    public function editRoute($id)
    {
        $data = [
            'dataRoute' => $this->db->get_where('routes',['id'=>$id])->result()[0]
        ];
		$this->load->view('dashboard/head');
		$this->load->view('dashboard/editRoute',$data);
		$this->load->view('dashboard/bottom');
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
}
