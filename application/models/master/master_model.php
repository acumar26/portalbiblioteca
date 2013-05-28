<?php

class master_model extends CI_Model {

    // PARA MOSTRAR NOTICIAS EN EL PORTAL INSTITUCIONAL - SOLO 3
    function cargarUltNoticias() {
        $this->adampt->setParam('qry_ultNoticias');
        $this->adampt->setParam(NULL);
        $this->adampt->setParam(NULL);
        $query = $this->adampt->consulta("USP_IMG_S_portalNoticias");

        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function cargarUltReservas() {
        $this->adampt->setParam('qry_ultReservas');        
        $query = $this->adampt->consulta("Usp_bib_s_ultimas_reservas");

        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function cargarUltLibrosReg() {
        $this->adampt->setParam('qry_ultLibrosReg');        
        $query = $this->adampt->consulta("Usp_bib_s_libros_ultimos_ingresados");

        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function cargarUltLibrosCod($nCLibro) {
        $this->adampt->setParam($nCLibro);        
        $query = $this->adampt->getCampo("USP_BIB_S_Libro_codigo",0);

        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function cargarUltLibrosAutor($nCid) {
        $this->adampt->setParam($nCid);        
        $query = $this->adampt->getfila("USP_BIB_S_Autor_datos");

        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function cargarUltLibrosReg2() {
        $this->adampt->setParam('qry_ultLibrosReg');        
        $query = $this->adampt->consulta("Usp_bib_s_libros_ultimos_ingresados");

        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function cargarUltLibrosRegFinal() {
        $this->adampt->setParam('qry_ultLibrosReg');        
        $query = $this->adampt->consulta("Usp_bib_s_libros_ultimos_ingresados");

        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
    function cargarUltUsuariosReg() {
        $this->adampt->setParam('L-U-TOP4');        
        $query = $this->adampt->consulta("Usp_gen_s_usuario");

        if ($query) {
            return $query;
        } else {
            return 0;
        }
    }
    
}
?>