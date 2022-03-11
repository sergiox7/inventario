<?php
defined('BASEPATH') OR exit('No se permite el acceso directo.');

class Inventario extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Inventario_model');
	}

	public function getAll(){
		//if($this->session->userdata('login') == true){
			$res = $this->Inventario_model->getAll();

			if($res != NULL){
				$respuesta = array();
				$respuesta['resultado'] = 'true';
				$respuesta['mensaje'] = 'Registros obtenidos con éxito';
				$respuesta['respuesta'] = $res;
				echo json_encode($respuesta);
			}
			else{
				$respuesta = array();
				$respuesta['resultado'] = 'false';
				$respuesta['mensaje'] = 'Hubo un error al obtener los registros';
				echo json_encode($respuesta);
			}

		//}
	}

	public function insert(){
		//if($this->session->userdata('login') == true){
			$this->form_validation->set_rules('idInsumo', 'IdInsumo', 'required|htmlspecialchars|trim');
			$this->form_validation->set_rules('idPuntoVenta', 'IdPuntoVenta', 'required|htmlspecialchars|trim');
			$this->form_validation->set_rules('cantidad', 'Cantidad', 'required|htmlspecialchars|trim');
			if($this->form_validation->run()){
				$idInsumo = $this->input->post("idInsumo");
				$idPuntoVenta = $this->input->post("idPuntoVenta");
				$cantidad = $this->input->post("cantidad");

				$data = array(
					"idInsumo" => $idInsumo,
					"idPuntoVenta" => $idPuntoVenta,
					"cantidad" => $cantidad
				);

				$inventario = $this->Inventario_model->insert($data);

				if($inventario != NULL){
					$respuesta = array();
					$respuesta['resultado'] = 'true';
					$respuesta['mensaje'] = 'El registro se insertó correctamente';
					echo json_encode($respuesta);
				}
				else{
					$respuesta = array();
					$respuesta['resultado'] = 'false';
					$respuesta['mensaje'] = 'Hubo un error al insertar el registro';
					echo json_encode($respuesta);
				}
			}
			else{
				$this->form_validation->set_error_delimiters('','');
				$respuesta = array();
				$respuesta['resultado'] = 'false';
				$respuesta['mensaje'] = validation_errors();
				echo json_encode($respuesta);
			}
		//}
	}
}
?>