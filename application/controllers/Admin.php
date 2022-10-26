<?php 
class Admin extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->library('Templates');
        $this->load->model('M_golive');
    }

    public function index(){
        $data['judul'] = '- Edit Paket';
        $data['harga'] = $this->M_golive->showDataHosting();

        $this->templates->admin('admin/v_index', $data);
    }

    public function tambahPaket(){
        if($_POST == NULL){
            $data['judul'] = '- Tambah Paket';
            $this->templates->admin('admin/v_tambah', $data);
        }else{
            $this->M_golive->simpanData();

            redirect('/admin');
        }
    }
    
    public function editPaket($id_hosting = NULL){
        if($_POST == NULL){
            $data['edit'] = $this->M_golive->getIdHosting($id_hosting);
            $data['judul'] = '- Edit Paket';
            $this->templates->admin('admin/v_update', $data);
        }else{
            $this->M_golive->updateData($id_hosting);
            redirect('/admin');
        }
    }

    public function hapusPaket($id_hosting){
        $this->M_golive->hapusData($id_hosting);
        redirect('/admin');
    }
}

