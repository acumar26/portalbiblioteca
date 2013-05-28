<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Opciones extends CI_Controller {

//    public function __construct() {
//        parent::__construct();
//        $this->load->model('master/master_model');
//    }

    public function carnetlector() {
        //$data['noticias_ultimas'] = $this->master_model->cargarUltNoticias();
        //$data['reservas_ultimas'] = $this->master_model->cargarUltReservas();
        $data['main_content'] = 'opciones/carnetlector_view';
        $this->load->view('master/plantilla_view', $data);
    }
    
    public function depositolegal() {
        //$data['noticias_ultimas'] = $this->master_model->cargarUltNoticias();
        //$data['reservas_ultimas'] = $this->master_model->cargarUltReservas();
        $data['main_content'] = 'opciones/depositolegal_view';
        $this->load->view('master/plantilla_view', $data);
    }
    
    public function lecturahospitales() {
        //$data['noticias_ultimas'] = $this->master_model->cargarUltNoticias();
        //$data['reservas_ultimas'] = $this->master_model->cargarUltReservas();
        $data['main_content'] = 'opciones/lecturahospitales_view';
        $this->load->view('master/plantilla_view', $data);
    }

    public function lecturaparques() {
        //$data['noticias_ultimas'] = $this->master_model->cargarUltNoticias();
        //$data['reservas_ultimas'] = $this->master_model->cargarUltReservas();
        $data['main_content'] = 'opciones/lecturaparques_view';
        $this->load->view('master/plantilla_view', $data);
    }
    
}