<?php 
//(defined('BASEPATH')) OR exit('No direct script access allowed');

class C_contacto_ws extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_contacto_ws');
        $this->load->helper('utils');
    }
    
    public function index()
    {
        $ip = $this->input->ip_address();
        //log_message('error', print_r($ip,true));
        $data['llamada'] = $_GET['id'];
        if(strlen($data['llamada']) > 5 && $ip == '192.168.1.61'){
            $this->load->view('contacto/V_contacto_ws', $data);
        }
    }

    function addContacto(){
        $t = microtime(true);
        $micro = sprintf("%06d",($t - floor($t)) * 1000000);
        $d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
        $llamada = $this->input->post('llamada');
        $datos = $this->M_contacto_ws->contacto_ws($d->format("Y-m-d H:i:s.u"),$llamada);
        
        $arrayjson[] = array(
            'tipo'          => 1,//tipo de actualizacion
            'mensaje'       => "hola",//mensaje
            'fecha'         => $d->format("d/m/Y H:i"),//fecha de envio
            'actualizacion' => '1',
            'telefono'      => $llamada,
            'id'            => $datos['id'],
            'fec_send'      => '1'.$d->format("dmY"),
            'time_send'     => '1'.$d->format("Hi"),
            'codigo'        => $datos['cod']
        );
        echo json_encode($arrayjson);
    }
}
