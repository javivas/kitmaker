<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
* HOME
*
* @uses     CI_Controller
* @package  Kitmaker
* @version  1.0
* @author   javivas
*
* Description: Controlador para las peticiones de página de la Home del site.
*
*/



class Home extends CI_Controller {
    
    public function index() {
        
        $data = array(
            'titulo' => 'CMS para móbiles',
            'descripcion' => 'CMS para móbiles en codeigniter',
            'metadatos' => 'metadatos',
            'content' => 'Bienvenidos al CMS para móbiles'
        );

        $this->load->view('includes/front/theme/template_view', $data);
    }

}

