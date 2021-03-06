<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hydralab_model  extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function crearCurso($data){
		$this->db->insert('cursos',array('nombreCurso'=>$data['nombre'],'videosCurso'=>$data['videos']));
	}
	public function eliminarCurso($id){
		
		$this->db->delete('cursos', array('idCurso'=>$id));
	}
	public function obtenerCursos(){
		$query = $this->db->get('cursos');
		if($query->num_rows()>0) return $query;
		else return false;
	}
	public function obtenerCurso($id){
		$this->db->where('idCurso',$id);
		$query = $this->db->get('cursos');
		if($query->num_rows() >0) return $query;
		else return false;
	}

	public function actualizarCurso($id,$data){
		$datos = array(
			'nombreCurso'=>$data['nombre'],
			'videosCurso'=>$data['videos']
		 );
		$this->db->where('idCurso',$id);
		$query = $this->db->update('cursos',$datos);
	}
}	
?> 