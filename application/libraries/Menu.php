<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu {	
	private $arr_menu;
	public function __construct($arr){
		$this->arr_menu = $arr;
	}
	public function construirMenu(){
		$ret_menu = "<nav><ul>";
		foreach ($this->arr_menu as $opcion) { 
			$ret_menu .= "<li>".$opcion."</li>";
		}
		$ret_menu .= "</nav></ul>";
		return $ret_menu;
	}


}
?>