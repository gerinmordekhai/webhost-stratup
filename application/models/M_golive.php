<?php 
class M_golive extends CI_Model{
    private $pricing = 'hosting';
    private $domain = 'domain';
    
    public function __construct(){
        parent::__construct();
    }

    public function showDataHosting(){
        return $this->db->get($this->pricing)->result();
    }
    
    public function getIdHosting($id_hosting){
        $query = $this->db->get_where($this->pricing, array('id_hosting' => $id_hosting));
        return $query->row();
    }
    
    public function simpanData(){
        $data = array(
            'nama_hosting' => $this->input->post('nama_hosting'),
            'has_cpanel' => $this->input->post('has_cpanel'),
            'has_ssl' => $this->input->post('has_ssl'),
            'has_subdomain' => $this->input->post('has_subdomain'),
            'has_storage' => $this->input->post('has_storage'),
            'num_database' => $this->input->post('num_database'),
            'harga' => $this->input->post('harga')
        );

        return $this->db->insert($this->pricing, $data);
    }

    public function updateData($data){
        $data = array(
            'nama_hosting' => $this->input->post('nama_hosting'),
            'has_cpanel' => $this->input->post('has_cpanel'),
            'has_ssl' => $this->input->post('has_ssl'),
            'has_subdomain' => $this->input->post('has_subdomain'),
            'has_storage' => $this->input->post('has_storage'),
            'num_database' => $this->input->post('num_database'),
            'harga' => $this->input->post('harga')
        );

        $this->db->where('id_hosting', $this->input->post('id_hosting'));
        return $this->db->update($this->pricing, $data);
    }

    public function hapusData($id_hosting){
        $this->db->where('id_hosting', $id_hosting);
        return $this->db->delete($this->pricing);
    }

    public function showDataDomain(){
        return $this->db->get($this->domain)->result();
    }

    public function getIdDomain($id_domain){
        $query = $this->db->get_where($this->domain, array('id_domain' => $id_domain));
        return $query->row();
    }

    public function simpanDataDomain(){
        $data = array(
            'nama_domain' => $this->input->post('nama_domain')
        );

        return $this->db->insert($this->domain, $data);
    }
}