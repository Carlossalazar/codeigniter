<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  function __construct()
  {
    parent:: __construct();
    $this->load->model("Model_User");
  }


	public function index()
	{
    $data['title'] = 'Pagina inicio';
    $data['contenido']= "user/index";
    $data['selPerfil']= $this->Model_User->selPerfil();
		$this->load->view("plantilla",$data);

	}


    public function insert(){
        $datos = $this->input->post();
        if(isset($datos)){
            $txtId = $datos['txtIdper'];
            $txtNombres = $datos['txtNombre'];
            $txtApellidos = $datos['txtApellido'];
            $txtCorreo = $datos['txtCorreo'];
            $txtTelefono = $datos['txtTelefono'];
            $this->Model_Usuario->insertUsuario($txtId, $txtNombre, $txtApellido, $txtCorreo, $txtTelefono);
            redirect('');
        }
    }



}
