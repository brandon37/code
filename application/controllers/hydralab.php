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

	function senDMail(){
		$this->load->library('email');
		$this->email->from('brandon@hydralab.mx','Brandon Rosales');
		$this->email->to('brandonedu9@gmail.com');

		$this->email->subject('Probando CodeIgniter');
		$this->email->message('Probandooo... Probandooo...');

		if($this->email->send()){
			 $this->load->view('hydralab/headers');
			 echo($this->email->print_debugger());
		}
		else{
			 echo($this->email->print_debugger());
		}
	}

}
?>
