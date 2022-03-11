<?php
defined('BASEPATH') OR exit('No se permite el acceso directo.');

class Inventario_model extends CI_Model{

	public function getAll(){
		$this->db->join('puntoVenta', 'puntoVenta.idPuntoVenta = inventario.idPuntoVenta');
		$this->db->join('insumo', 'insumo.idInsumo = inventario.idInsumo');
		$rs = $this->db->get('inventario');
		return $rs->num_rows() > 0 ? $rs->result() : NULL;
	}

	public function insert($data){
		return $this->db->insert('inventario', $data) ? true : NULL;
	}

}