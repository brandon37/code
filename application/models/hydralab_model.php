<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hydralab_model  extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function crearCurso(){
		$this->db->insert('cursos',array('nombreCurso'=>$data['nombre'],'videosCurso'=>$data['videos']));
	}

}	
?>