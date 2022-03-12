<?php
defined('BASEPATH') OR exit('No se permite el acceso directo.');

class PtVenta extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('PtVenta_model');
	}

	public function getAll(){
		//if($this->session->userdata('login') == true){

			$respuesta = array();
			$respuesta['resultado'] = 'false';
			$respuesta['mensaje'] = 'Ocurrio un error durante la petición';
			$respuesta['respuesta'] = null;

			$res = $this->PtVenta_model->getAll();

			if($res != NULL){
				$respuesta['resultado'] = 'true';
				$respuesta['mensaje'] = 'Registros obtenidos con éxito';
				$respuesta['respuesta'] = $res;
			}
			
			echo json_encode($respuesta);
		//}
	}

	public function get(){
		//if($this->session->userdata('login') == true){
			$respuesta = array();
			$respuesta['resultado'] = 'false';
			$respuesta['mensaje'] = 'Ocurrio un error durante la petición';
			$respuesta['respuesta'] = null;
            
            
            $this->form_validation->set_data($_GET)->set_rules('id', 'id', 'trim|integer|max_length[11]|greater_than_equal_to[1]|required'); 
		
            if ($this->form_validation->run()/* &&  $this->input->is_ajax_request()*/) {
  				$id_registro        = $this->input->get('id'); 
                $res = $this->PtVenta_model->getById($id_registro); 

				if($res != NULL){

				$respuesta['resultado'] = 'true';
				$respuesta['mensaje'] = 'Registros obtenidos con éxito';
				$respuesta['respuesta'] = $res;

				}

             }

            /*Si la validación de campos es incorrecta*/
            else {
            	$this->form_validation->set_error_delimiters('','');
				$respuesta['error'] = validation_errors();
            }
			
            echo json_encode($respuesta);

		//}
	}


	public function insert(){
		//if($this->session->userdata('login') == true){

			$respuesta = array();
			$respuesta['resultado'] = 'false';
			$respuesta['mensaje'] = 'Ocurrio un error durante la petición';
			$respuesta['respuesta'] = null;

			$this->form_validation->set_rules('nombre', 'nombre del PtVenta', 'required|htmlspecialchars|max_length[50]|trim');

			if($this->form_validation->run()/* &&  $this->input->is_ajax_request()*/){
				$idPtVenta 	= $this->input->post("idPtVenta");
				$nombre 		= $this->input->post("nombre");

				$data = array(
					"nombre" 		=> $nombre,
				);

				$is_affected = $this->PtVenta_model->insert($data);

				if($is_affected != NULL){
					$respuesta['resultado'] = 'true';
					$respuesta['mensaje'] = 'El registro se insertó correctamente';
				}

			}

            /*Si la validación de campos es incorrecta*/
            else {
            	$this->form_validation->set_error_delimiters('','');
				$respuesta['error'] = validation_errors();
            }
			
            echo json_encode($respuesta);

		//}
	}


	public function edit(){
		//if($this->session->userdata('login') == true){

			$respuesta = array();
			$respuesta['resultado'] = 'false';
			$respuesta['mensaje'] = 'Ocurrio un error durante la petición';
			$respuesta['respuesta'] = null;

			$this->form_validation->set_rules('idPtVenta', 'id del PtVenta', 'trim|integer|max_length[11]|greater_than_equal_to[1]|required');
			$this->form_validation->set_rules('nombre', 'nombre del PtVenta', 'required|htmlspecialchars|max_length[50]|trim');

			if($this->form_validation->run()/* &&  $this->input->is_ajax_request()*/){
				$idPtVenta 	= $this->input->post("idPtVenta");
				$nombre 		= $this->input->post("nombre");

				//revisar que exista el registro
				$res = $this->PtVenta_model->getById($idPtVenta); 

				if($res != NULL){
					$data = array(
						"nombre" 		=> $nombre,
					);

					$is_affected = $this->PtVenta_model->update($data, $idPtVenta);

					if($is_affected != NULL){
						$respuesta['resultado'] = 'true';
						$respuesta['mensaje'] = 'El registro se actualizó correctamente';
					}else{
						$respuesta['mensaje'] = 'No fue posible modificar el registro';
					}

				}

			}

            /*Si la validación de campos es incorrecta*/
            else {
            	$this->form_validation->set_error_delimiters('','');
				$respuesta['error'] = validation_errors();
            }
			
            echo json_encode($respuesta);

		//}
	}


	public function delete(){
		//if($this->session->userdata('login') == true){

			$respuesta = array();
			$respuesta['resultado'] = 'false';
			$respuesta['mensaje'] = 'Ocurrio un error durante la petición';
			$respuesta['respuesta'] = null;

			$this->form_validation->set_rules('idPtVenta', 'id del PtVenta', 'trim|integer|max_length[11]|greater_than_equal_to[1]|required');

			if($this->form_validation->run()/* &&  $this->input->is_ajax_request()*/){
				$idPtVenta		= $this->input->post("idPtVenta");

				//revisar que exista el registro
				$res = $this->PtVenta_model->getById($idPtVenta); 

				if($res != NULL){

					$is_affected = $this->PtVenta_model->deleteById($idPtVenta);

					if($is_affected != NULL){
						$respuesta['resultado'] = 'true';
						$respuesta['mensaje'] = 'El registro se elimino correctamente';
					}else{
						$respuesta['mensaje'] = 'No fue posible eliminar el registro';
					}

				}

			}

            /*Si la validación de campos es incorrecta*/
            else {
            	$this->form_validation->set_error_delimiters('','');
				$respuesta['error'] = validation_errors();
            }
			
            echo json_encode($respuesta);

		//}
	}

}




?>