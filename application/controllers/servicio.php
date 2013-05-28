<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Servicio extends CI_Controller {
  
    function index(){
     
        $data['main_content'] = 'servicio_view';
        $this->load->view('master/plantilla_view', $data);
        
    }    
   
}
?>