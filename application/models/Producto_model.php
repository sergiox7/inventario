<?php
defined('BASEPATH') OR exit('No se permite el acceso directo.');

class Producto_model extends CI_Model{

	public function getAll(){
		$this->db->select('idProducto, unidadMedida, producto.nombre as nombreproducto, precioVenta, producto.idProveedor, proveedor.nombre as nombreproveedor from producto left join proveedor on proveedor.idProveedor = producto.idProveedor', FALSE);

		$rs = $this->db->get();

		return $rs->num_rows() > 0 ? $rs->result() : NULL;
	}

     public function getById($id)
    {
        $cmd = "SELECT * FROM producto where idProducto = ".$id;

        $query = $this->db->query($cmd);
        return ($query->num_rows() == 1) ? $query->row() : NULL;
    }

	public function insert($data){
		return $this->db->insert('producto', $data) ? true : NULL;
	}


    public function update($entry, $idProducto)
    {
        try {
            $this->db->set($entry);
            $this->db->where('idProducto', $idProducto);
            $this->db->update('producto');

            return ($idProducto) ? TRUE : NULL;
        }

        catch(Exception $e) {
            return $e->getMessage();
        }
    }	

     public function deleteById($id)
    {
        $cmd = "DELETE FROM producto where idProducto = ".$id;

        $query = $this->db->query($cmd);
        return (TRUE) ? TRUE : NULL;
    }
     
}


/*
{
	"table": "producto",
	"rows":
	[
		{
			"idProducto": 1,
			"unidadMedida": "lts",
			"idProveedor": 1,
			"nombre": "producto 1",
			"precioVenta": 1
		}
	]
}

*/