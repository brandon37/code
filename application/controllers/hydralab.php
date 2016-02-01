<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hydralab extends CI_Controller {	

	function __construct(){
		parent::__construct();
		$this->load->helper('mihelper');
	}

	function index(){
		$this->load->view('hydralab/headers');
		$this->load->view('hydralab/bienvenido');
	}
	function holaMundo(){
		$this->load->view('hydralab/headers');
		$this->load->view('hydralab/bienvenido');
	}

}
?>
