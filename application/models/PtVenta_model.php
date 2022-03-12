<?php
defined('BASEPATH') OR exit('No se permite el acceso directo.');

class PtVenta_model extends CI_Model{

	public function getAll(){
		$rs = $this->db->get('ptVenta');
		return $rs->num_rows() > 0 ? $rs->result() : NULL;
	}

     public function getById($id)
    {
        $cmd = "SELECT * FROM ptVenta where idPtVenta = ".$id;

        $query = $this->db->query($cmd);
        return ($query->num_rows() == 1) ? $query->row() : NULL;
    }

	public function insert($data){
		return $this->db->insert('ptVenta', $data) ? true : NULL;
	}


    public function update($entry, $idPtVenta)
    {
        try {
            $this->db->set($entry);
            $this->db->where('idPtVenta', $idPtVenta);
            $this->db->update('ptVenta');

            return ($idPtVenta) ? TRUE : NULL;
        }

        catch(Exception $e) {
            return $e->getMessage();
        }
    }	

     public function deleteById($id)
    {
        $cmd = "DELETE FROM ptVenta where idPtVenta = ".$id;

        $query = $this->db->query($cmd);
        return (TRUE) ? TRUE : NULL;
    }
     
}


/*
{
	"table": "ptVenta",
	"rows":
	[
		{
			"idPtVenta": 1,
			"unidadMedida": "lts",
			"idPtVenta": 1,
			"nombre": "ptVenta 1",
			"precioVenta": 1
		}
	]
}

*/