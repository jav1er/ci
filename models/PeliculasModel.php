<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PeliculasModel extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	 function crear($post){
	 	var_dump($this->db->last_query());
		json_encode($post);
		$datosPelicula = array();
		$datosPelicula['nombre'] = $post['nombre'];
		$datosPelicula['apellido'] = $post['apellido'];
		$datosPelicula['cedula'] = $post['cedula'];
		$this->db->insert('nombres', $datosPelicula);


	}


// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
}
