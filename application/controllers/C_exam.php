<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_exam extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        $sesionU = $this->session->userdata('s_nombreUsuario');
        if (!empty($sesionU)) {
            $sesionU = $this->session->userdata('s_mascota');
            if (!empty($sesionU)) {
                redirect('dash');
            } else {
                $this->load->view('V_newmascota');
            }
        } else {
            redirect('login');
        }
    }

    public function login() 
    {
        $data['error'] = EXIT_ERROR;

        try 
        {
            $user = $this->input->post('usuario');
            $pass = $this->input->post('password');
            
            $datos_login = array(
                'username' => $user,
                'password' => $pass
            );

            $data = $this->M_login->login($datos_login);
            
            echo json_encode($data);

        } catch (\Throwable $th) {throw $th;}
    }

    function newmascota() {
        $option = $this->input->post('option');
        $sesionU = $this->session->userdata('s_idUsuario');
        $data = $this->M_login->insertMascota($option,$sesionU);
        echo json_encode($data);

    }

    
}