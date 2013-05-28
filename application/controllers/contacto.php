<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contacto extends CI_Controller {
  
    function index(){
     
        $data['main_content'] = 'contacto_view';
        $this->load->view('master/plantilla_view', $data);
        
    }    
   
}
?>