<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  function __construct()
  {
    parent:: __construct();
  //  $this->load->model("Model_User");
  }


	public function index()
	{
    $data['contenido']= "user/index";
		$this->load->view("plantilla",$data);

	}
}
