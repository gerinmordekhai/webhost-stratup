<?php

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('Templates');
        $this->load->model('M_golive');
    }

	public function index(){
		$data['judul'] = '- Home';
        $data['harga'] = $this->M_golive->showDataHosting();
        
        $this->templates->home('home/v_index', $data);
	}

    public function pembelian($id_hosting = NULL){
        if($_POST == NULL){
            $data['judul'] = '- Pembelian';
            $data['beli'] = $this->M_golive->getIdHosting($id_hosting);

            $this->templates->home('home/v_beli', $data);
        }else{
            $this->M_golive->simpanDataDomain();

            echo '<script> 
            alert("Selamat di SistemIT.com...!"); 
            </script>';

            redirect('/');
        }
    }
}
