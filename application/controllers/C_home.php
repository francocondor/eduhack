<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('utils');
    }

    public function index()
    {
        $sesionU = $this->session->userdata('s_nombreUsuario');
        
        //if (!empty($sesionU)) {
            $data = array(
            );
            $this->load->view('V_home', $data);
        //} else {
        //    redirect('login');
        //}
        
    }

    public function cerrarSesion() {

        $this->session->unset_userdata('s_idUsuario');
        $this->session->unset_userdata('s_nombreUsuario');
        $this->session->unset_userdata('s_nombrePersona');
        $this->session->unset_userdata('s_roles');
        $this->session->unset_userdata('s_area');
        
        if (!$this->session->userdata('s_idPersona_intranet')) {
            $this->session->sess_destroy();
        }
        
        redirect(base_url());
    }
}