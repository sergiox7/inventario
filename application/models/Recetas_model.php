<?php
defined('BASEPATH') OR exit('No se permite el acceso directo.');

class Recetas_model extends CI_Model{

    public function getAll(){
        $cmd = "SELECT * FROM receta";

        $query = $this->db->query($cmd);
        return $query->num_rows() != 0 ? $query->result() : NULL;
    }
     
}