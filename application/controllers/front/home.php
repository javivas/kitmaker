<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

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

