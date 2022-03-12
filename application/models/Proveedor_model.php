<?php
defined('BASEPATH') OR exit('No se permite el acceso directo.');

class Proveedor_model extends CI_Model{

	public function getAll(){
		$rs = $this->db->get('proveedor');
		return $rs->num_rows() > 0 ? $rs->result() : NULL;
	}

     public function getById($id)
    {
        $cmd = "SELECT * FROM proveedor where idProveedor = ".$id;

        $query = $this->db->query($cmd);
        return ($query->num_rows() == 1) ? $query->row() : NULL;
    }

	public function insert($data){
		return $this->db->insert('proveedor', $data) ? true : NULL;
	}


    public function update($entry, $idProveedor)
    {
        try {
            $this->db->set($entry);
            $this->db->where('idProveedor', $idProveedor);
            $this->db->update('proveedor');

            return ($idProveedor) ? TRUE : NULL;
        }

        catch(Exception $e) {
            return $e->getMessage();
        }
    }	

     public function deleteById($id)
    {
        $cmd = "DELETE FROM proveedor where idProveedor = ".$id;

        $query = $this->db->query($cmd);
        return (TRUE) ? TRUE : NULL;
    }
     
}


/*
{
	"table": "proveedor",
	"rows":
	[
		{
			"idProveedor": 1,
			"unidadMedida": "lts",
			"idProveedor": 1,
			"nombre": "proveedor 1",
			"precioVenta": 1
		}
	]
}

*/