<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Master extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('master/master_model');
    }

    public function index() {
        $data['noticias_ultimas'] = $this->master_model->cargarUltNoticias();
        $data['reservas_ultimas'] = $this->master_model->cargarUltReservas();
        $data['librosreg_ultimas'] = $this->master_model->cargarUltLibrosReg();
        
        foreach ($data['librosreg_ultimas'] as $key => $valor) {        
            $nCid = $this->master_model->cargarUltLibrosCod($valor['nCLibro']);
                  
            $temp[] = $this->master_model->cargarUltLibrosAutor($nCid);            
            
        }        
        
        $data['librosautor_ultimas'] = $temp;
        
        $data['usuariosreg_ultimas'] = $this->master_model->cargarUltUsuariosReg();
        
        $data['main_content'] = 'inicio_view';
        $this->load->view('master/plantilla_view', $data);
    }

}