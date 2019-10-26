<?php

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function login($datos_login) {

        $sql = 'SELECT * 
                  FROM usuario u
             LEFT JOIN usuariomascota um on um.idusuario = u.idusuario,
                       rolusuario ru,
                       rol r,
                       persona p
                 WHERE u.idpersona = p.idpersona 
                   AND ru.idusuario = u.idusuario
                   AND ru.idrol = r.idrol
                   AND LOWER(username) = LOWER(?) 
                   AND password = ?';

        $resultado = $this->db->query($sql,$datos_login);
        
        //log_message('error',$this->db->last_query());
        if($resultado->num_rows() == 1)
        {
            $r = $resultado->row();
            
            $s_usuario = array(
                's_idUsuario' => $r->idusuario,
                's_nombreUsuario' => $r->username,
                's_nombrePersona' => $r->nombres,
                's_roles' => $r->idrol,
                's_mascota' => $r->idmascota
            );

            $this->session->set_userdata($s_usuario);

            return array('error'=> EXIT_SUCCESS);

        } else { return array('error'=> EXIT_ERROR);}
    }

    function guardarAcceso($datos_acceso) {
        $resultado = $this->db->query('SELECT * FROM "MDB_SEG"."SEG_GUARDARACCESO"(?,?,?)',$datos_acceso);
        if($resultado->result()[0]->SEG_GUARDARACCESO == 'OK'){
            return array('error'=> EXIT_SUCCESS);
        } else {
            return array('error'=> EXIT_ERROR);
        }
    }

    function insertMascota($opt,$user){
        $sql = 'INSERT INTO usuariomascota (idusuario, idmascota)
            VALUES (?, ?)';
        $resultado = $this->db->query($sql,array($user,$opt));
        if($this->db->affected_rows() > 0){
            $this->session->set_userdata('s_mascota', $opt);
            return array('error'=> EXIT_SUCCESS);
        } else {
            return array('error'=> EXIT_ERROR);
        }
    }

    
}