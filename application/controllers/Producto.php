<?php
defined('BASEPATH') OR exit('No se permite el acceso directo.');

class Producto extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Producto_model');
	}

	public function getAll(){
		//if($this->session->userdata('login') == true){

			$respuesta = array();
			$respuesta['resultado'] = 'false';
			$respuesta['mensaje'] = 'Ocurrio un error durante la petición';
			$respuesta['respuesta'] = null;

			$res = $this->Producto_model->getAll();

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
           
        		$post_id       = $this->input->post('id'); 

			$datos_post = array();
			
            $this->form_validation->set_data($datos_post)->set_rules('id', 'id', 'trim|integer|max_length[11]|greater_than_equal_to[1]|required'); 
		
            if ($this->form_validation->run()/* &&  $this->input->is_ajax_request()*/) {
                 $res = $this->Producto_model->getById($post_id); 

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

			$this->form_validation->set_rules('unidadMedida', 'unidad de medida', 'required|htmlspecialchars|max_length[5]|trim');
			$this->form_validation->set_rules('idProveedor', 'proveedor', 'required|integer|greater_than_equal_to[1]|max_length[11]|trim');
			$this->form_validation->set_rules('nombre', 'nombre del producto', 'required|htmlspecialchars|max_length[50]|trim');
			$this->form_validation->set_rules('precioVenta', 'precio del producto', 'required|numeric|greater_than[0]|trim');

			if($this->form_validation->run()/* &&  $this->input->is_ajax_request()*/){
				$unidadMedida 	= $this->input->post("unidadMedida");
				$idProveedor 	= $this->input->post("idProveedor");
				$nombre 		= $this->input->post("nombre");
				$precioVenta 	= $this->input->post("precioVenta");

				$data = array(
					"unidadMedida" 	=> $unidadMedida,
					"idProveedor" 	=> $idProveedor,
					"nombre" 		=> $nombre,
					"precioVenta" 	=> $precioVenta,
				);

				$is_affected = $this->Producto_model->insert($data);

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

			$this->form_validation->set_rules('idProducto', 'id del producto', 'trim|integer|max_length[11]|greater_than_equal_to[1]|required');
			$this->form_validation->set_rules('unidadMedida', 'unidad de medida', 'required|htmlspecialchars|max_length[5]|trim');
			$this->form_validation->set_rules('idProveedor', 'proveedor', 'required|numeric|greater_than_equal_to[1]|max_length[11]|trim');
			$this->form_validation->set_rules('nombre', 'nombre del producto', 'required|htmlspecialchars|max_length[50]|trim');
			$this->form_validation->set_rules('precioVenta', 'precio del producto', 'required|numeric|greater_than[0]|trim');

			if($this->form_validation->run()/* &&  $this->input->is_ajax_request()*/){
				$idProducto		= $this->input->post("idProducto");
				$unidadMedida 	= $this->input->post("unidadMedida");
				$idProveedor 	= $this->input->post("idProveedor");
				$nombre 		= $this->input->post("nombre");
				$precioVenta 	= $this->input->post("precioVenta");

				//revisar que exista el registro
				$res = $this->Producto_model->getById($idProducto); 

				if($res != NULL){
					$data = array(
						"unidadMedida" 	=> $unidadMedida,
						"idProveedor" 	=> $idProveedor,
						"nombre" 		=> $nombre,
						"precioVenta" 	=> $precioVenta,
					);

					$is_affected = $this->Producto_model->update($data, $idProducto);

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

			$this->form_validation->set_rules('idProducto', 'id del producto', 'trim|integer|max_length[11]|greater_than_equal_to[1]|required');

			if($this->form_validation->run()/* &&  $this->input->is_ajax_request()*/){
				$idProducto		= $this->input->post("idProducto");

				//revisar que exista el registro
				$res = $this->Producto_model->getById($idProducto); 

				if($res != NULL){

					$is_affected = $this->Producto_model->deleteById($idProducto);

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

	public function tabla(){
		//if($this->session->userdata('login') == true){
            
        $data['res'] = $this->Producto_model->getAll(); 

        $html = $this->load->view('public/private/tabla_productos', $data, true);
        echo $html; 				
            
		//}
	}


}




?>