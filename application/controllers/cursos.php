<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cursos extends CI_Controller {	
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('hydralab_model');
	}
	function index(){
		$data['segmento'] = $this->uri->segment(3);
		
		$this->load->view('hydralab/headers');
		if(!$data['segmento']){
			$data['cursos'] = $this->hydralab_model->obtenerCursos();
		}else{
			$data['cursos'] = $this->hydralab_model->obtenerCurso($data['segmento']); 
		}
		$this->load->view('cursos/cursos',$data);
	} 
	function nuevo(){
		$this->load->view('hydralab/headers');
		$this->load->view('cursos/formulario');
	}
	function recibirDatos(){
		$data = array(
			'nombre'=> $this->input->post('nombre'),
			'videos'=> $this->input->post('videos') 
		);
		$this->hydralab_model->crearCurso($data);
		$this->load->view('hydralab/headers');
		$this->load->view('hydralab/bienvenido');
	}
	function editar(){
		$data['id'] = $this->uri->segment(3);
		$data['curso'] = $this->hydralab_model->obtenerCurso($data['id']);
		$this->load->view('hydralab/headers');
		$this->load->view('cursos/editar',$data);
	}
	function borrar(){
		$id = $this->uri->segment(3);
		$this->hydralab_model->eliminarCurso($id);
	}
	function actualizar(){
		$data = array(
			'nombre'=> $this->input->post('nombre'),
			'videos'=> $this->input->post('videos') 
		);
		$this->hydralab_model->actualizarCurso($this->uri->segment(3),$data);
		redirect(base_url());
	}

}
?>
