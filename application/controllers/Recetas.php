<?php
defined('BASEPATH') OR exit('No se permite el acceso directo.');

class Recetas extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Recetas_model');
	}

	public function getAll(){
		//if($this->session->userdata('login') == true){
			$res = $this->Recetas_model->getAll();

			if($res != NULL){
				$respuesta = array();
				$respuesta['resultado'] = 'true';
				$respuesta['mensaje'] = 'Registros obtenidos con éxito';
				$respuesta['respuesta'] = $res;
				$this->output->set_content_type( "application/json" );
				echo json_encode($respuesta);
			}
			else{
				$respuesta = array();
				$respuesta['resultado'] = 'false';
				$respuesta['mensaje'] = 'Hubo un error al obtener los registros de recetas';
				$this->output->set_content_type( "application/json" );
				echo json_encode($respuesta);
			}

		//}
	}

}
?>