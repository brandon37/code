<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hydralab extends CI_Controller {	

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('hydralab_model');
	}

	function index(){
		$this->load->library("menu",array('Inicio', 'Contactos', 'Cursos', 'Acerca de'));
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->view('hydralab/headers');
		$this->load->view('hydralab/bienvenido',$data);
	}
	function holaMundo(){
		$this->load->view('hydralab/headers');
		$this->load->view('hydralab/bienvenido');
	}


}
?>
