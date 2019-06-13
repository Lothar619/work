<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiantes extends CI_Controller {

	public function index()
	{
        $data['estudiantes']=$this->estudiantes_model->retornarEstudiantes();

        $this->load->view('head');
        $this->load->view('vistaLista',$data);



	}
	public function Notas()
	{
        $data['estudiantes']=$this->estudiantes_model->retornarEstudiantes();

        $this->load->view('head');
        $this->load->view('vistanotas',$data);
    }
    public function Registro()
	{
        $nombre=$_POST['nombre'];
        $nota=$_POST['nota'];


        $this->estudiantes_model->registroEstudiantes($nombre,$nota);
        $this->load->view('head');
        $this->load->view('vistaregistro');
	}
}
