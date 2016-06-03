<?php

/**
 *
 */
class Model_User extends CI_Model
{

  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function selPerfil(){
    $query = $this->db->query("Select * from perfil");
    return $query->result();
  }

  public function insertUsuario($idper, $nombres, $apellidos, $correo, $telefono){

        $arrayDatos = array(
            'per_id' => $idper,
            'usu_nombres' => $nombres,
            'usu_apellidos' => $apellidos,
            'usu_correo' => $correo,
            'usu_telefono' => $telefono
        );

        $this->db->insert('usuario', $arrayDatos);

    }



}
