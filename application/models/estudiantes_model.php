<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estudiantes_model extends CI_Model {

	public function  retornarEstudiantes()
	{
        $this->db->select('*');
        $this->db->from('estudiantes');
        $this->db->order_by('idestudiante');
        return $this->db->get();

	
    }
    public function  registroEstudiantes($nombre,$nota)
	{
        $this->db->Insert();
        $this->db->into('estudiantes' ($nombre,$nota));
	
	}

}