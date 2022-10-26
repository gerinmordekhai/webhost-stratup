<?php 
class Templates {
    protected $ci;

    public function __construct(){
        $this->ci = &get_instance();
    }
    
    public function home($template = NULL, $data = NULL){
        if($template != NULL){
            $data['_konten'] = $this->ci->load->view($template, $data, TRUE);
        }
        $data['_navbar'] = $this->ci->load->view('templates/v_navbar', $data, TRUE);
        $data['_footer'] = $this->ci->load->view('templates/v_footer', $data, TRUE);
        $data['_app'] = $this->ci->load->view('app', $data);
    }

    public function admin($template = NULL, $data = NULL){
        if($template != NULL){
            $data['_konten'] = $this->ci->load->view($template, $data, TRUE);
        }
        $data['_navbar'] = $this->ci->load->view('templates/v_navadmin', $data, TRUE);
        $data['_footer'] = $this->ci->load->view('templates/v_footer', $data, TRUE);
        $data['_app'] = $this->ci->load->view('app', $data);
    }
}


