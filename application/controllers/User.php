<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
    $data['listaUsuario']= $this->Model_User->listUsuario();
		$this->load->view("plantilla",$data);

	}


    public function insert(){
        $datos = $this->input->post();

        if(isset($datos)){
            $txtId = $datos['txtIdper'];
            $txtNombre = $datos['txtNombre'];
            $txtApellido = $datos['txtApellido'];
            $txtCorreo = $datos['txtCorreo'];
            $txtTelefono = $datos['txtTelefono'];
            $this->Model_User->insertUsuario($txtId, $txtNombre, $txtApellido, $txtCorreo, $txtTelefono);
            redirect('');
        }


    }

    public function delete($id = NULL){
        if($id != NULL){
            $this->Model_User->deleteUsuario($id);
            redirect('');
        }
    }

    public function edit($id = NULL){
        if($id != NULL){
            //mostrar datos
            $data['contenido'] = 'user/edit';
            $data['selPerfil'] = $this->Model_User->selPerfil();
            $data['datosUsuario'] = $this->Model_User->editUsuario($id);
            $this->load->view('plantilla', $data);
        }else{
            //regresar a index enviar parametro
            redirect('');
        }

    }

    public function update(){
        $datos = $this->input->post();
        if(isset($datos)){
            $txtUsuid = $datos['txtUsuid'];
            $txtPerid = $datos['txtPerid'];
            $txtNombre = $datos['txtNombre'];
            $txtApellido = $datos['txtApellido'];
            $txtCorreo = $datos['txtCorreo'];
            $txtTelefono = $datos['txtTelefono'];
            $this->Model_User->updateUsuario($txtUsuid,$txtPerid, $txtNombre, $txtApellido, $txtCorreo, $txtTelefono);
            redirect('');
        }
    }



}
