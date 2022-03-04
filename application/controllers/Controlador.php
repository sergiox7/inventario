<?php
class Controlador extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/login" );
		$this->load->view( "public/componentes/footer_f");
	}

	public function puntosVenta(){
		
		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/puntosVenta" );
		$this->load->view( "public/componentes/footer_f");

	}

	public function insumos(){
		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/insumos" );
		$this->load->view( "public/componentes/footer_f");
	}

	public function recetas(){
		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/recetas" );
		$this->load->view( "public/componentes/footer_f");

	}
	public function productos(){
		$this->load->view( "public/componentes/header_f" );
		$this->load->view( "public/private/productos" );
		$this->load->view( "public/componentes/footer_f");

	}
	public function reportes(){
		$this->load->view( "reportes" );
	}
}
?>