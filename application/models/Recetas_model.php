<?php
defined('BASEPATH') OR exit('No se permite el acceso directo.');

class Recetas_model extends CI_Model{

    public function getAll(){
        $cmd = "SELECT * FROM receta";

        $query = $this->db->query($cmd);
        return $query->num_rows() != 0 ? $query->result() : NULL;
    }
    public function insert($data){
        return $this->db->insert('receta', $data) ? true : NULL;
    }

    public function getById($id)
    {
        $cmd = "SELECT * FROM receta where idReceta  = ".$id;

        $query = $this->db->query($cmd);
        return $query->num_rows() != 0 ? $query->result() : NULL;
    }

    public function update($datos, $idInsumo)
    {
        try {
            $this->db->set($datos);
            $this->db->where('idReceta', $idReceta);
            $this->db->update('receta');

            return ($idInsumo) ? TRUE : NULL;
        }

        catch(Exception $e) {
            return $e->getMessage();
        }
        
    }   

    public function deleteById($id)
    {
        $cmd = "DELETE FROM receta where idReceta = ".$id;

        $query = $this->db->query($cmd);
        return (TRUE) ? TRUE : NULL;
    }
     
}