<?php
class Controlador extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view( "public/componentes/public_header_f" );
		$this->load->view( "public/login" );
		$this->load->view( "public/componentes/footer_f");
	}

	public function restablecer(){
		$this->load->view( "public/componentes/public_header_f" );
		$this->load->view( "public/restablecer" );
		$this->load->view( "public/componentes/footer_f");
	}

	public function puntosVenta(){
		
		$data['scripts'][]          = 'app/private/modules/puntosVenta';

		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/puntosVenta", $data );
		$this->load->view( "public/componentes/footer_f");

	}

	public function detalleptventa(){

		$data['scripts'][]          = 'app/private/modules/f_puntoVenta';
		$data['editable'] 			= false;
		$data['id']					= null;	
   
		if(!empty($this->input->get())){
	        
	        $post_id      	= $this->input->get('id');

			$datos_get = array(
				'id'	=> $post_id,
			);
	        $this->form_validation->set_data($datos_get)->set_rules('id', 'id', 'trim|integer|max_length[11]|greater_than_equal_to[1]|required'); 

	        if($this->form_validation->run()){
	        	$data['editable'] 	= true;
	        	$data['id']			= $datos_get['id'];
	        }

		} 

		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/forma_puntosventa", $data );
		$this->load->view( "public/componentes/footer_f");

	}	

	public function insumos(){

		$data['scripts'][]          = 'app/private/modules/insumos';


		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/insumos", $data );
		$this->load->view( "public/componentes/footer_f");
	}

	public function detalleinsumo(){

		$data['scripts'][]          = 'app/private/modules/f_insumo';
		$data['editable'] 			= false;
		$data['id']					= null;	
   
		if(!empty($this->input->get())){
	        
	        $post_id      	= $this->input->get('id');

			$datos_get = array(
				'id'	=> $post_id,
			);
	        $this->form_validation->set_data($datos_get)->set_rules('id', 'id', 'trim|integer|max_length[11]|greater_than_equal_to[1]|required'); 

	        if($this->form_validation->run()){
	        	$data['editable'] 	= true;
	        	$data['id']			= $datos_get['id'];
	        }

		} 

		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/forma_insumos", $data );
		$this->load->view( "public/componentes/footer_f");

	}	

	public function recetas(){
		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/recetas" );
		$this->load->view( "public/componentes/footer_f");

	}

	public function detallereceta(){
		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/forma_receta" );
		$this->load->view( "public/componentes/footer_f");

	}

	public function productos(){
		$data['scripts'][]          = 'app/private/modules/productos';

		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/productos", $data );
		$this->load->view( "public/componentes/footer_f");

	}
	

	public function detalleproducto(){

		$data['scripts'][]          = 'app/private/modules/f_producto';
		$data['editable'] 			= false;
		$data['id']					= null;	
   
		if(!empty($this->input->get())){
	        
	        $post_id      	= $this->input->get('id');

			$datos_get = array(
				'id'	=> $post_id,
			);
	        $this->form_validation->set_data($datos_get)->set_rules('id', 'id', 'trim|integer|max_length[11]|greater_than_equal_to[1]|required'); 

	        if($this->form_validation->run()){
	        	$data['editable'] 	= true;
	        	$data['id']			= $datos_get['id'];
	        }

		} 
	

		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/forma_productos", $data );
		$this->load->view( "public/componentes/footer_f");

	}


	public function proveedores(){

		$data['scripts'][]          = 'app/private/modules/proveedores';

		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/proveedores", $data);
		$this->load->view( "public/componentes/footer_f");

	}
	

	public function detalleproveedor(){

		$data['scripts'][]          = 'app/private/modules/f_proveedor';
		$data['editable'] 			= false;
		$data['id']					= null;	
   
		if(!empty($this->input->get())){
	        
	        $post_id      	= $this->input->get('id');

			$datos_get = array(
				'id'	=> $post_id,
			);
	        $this->form_validation->set_data($datos_get)->set_rules('id', 'id', 'trim|integer|max_length[11]|greater_than_equal_to[1]|required'); 

	        if($this->form_validation->run()){
	        	$data['editable'] 	= true;
	        	$data['id']			= $datos_get['id'];
	        }

		} 

		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/forma_proveedores", $data );
		$this->load->view( "public/componentes/footer_f");

	}

	public function reportes(){
		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/reportes" );
		$this->load->view( "public/componentes/footer_f");
	}
}
?>