<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Articulos_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('articulos_model'));
    }

    public function index() {

        $result['results'] = $this->articulos_model->get_All_articulos();
        
        $data = array(
            'titulo' => 'CMS para móbiles',
            'descripcion' => 'CMS para móbiles en codeigniter',
            'metadatos' => 'metadatos',
            'content' => $this->load->view("includes/admin/articulos_admin/articulos_admin_view", $result, true)
        );

        $this->load->view('includes/admin/theme/template_view', $data);
    }

    public function articulo($id = null) {

        $result['results'] = $this->articulos_model->get_articulo($id);
        $visible = (bool) $this->articulos_model->get_visibilidad_articulo($id);
        if($visible)
                $result['accion'] =  'censurar';
        else
                $result['accion'] =  'publicar';
        $data = array(
            'titulo' => 'CMS para móbiles ADMin',
            'descripcion' => 'CMS para móbiles en codeigniter',
            'metadatos' => 'metadatos',
            'content' => $this->load->view("includes/admin/articulos_admin/articulo_admin_view", $result, true)
        );
        $this->load->view('includes/admin/theme/template_view', $data);
    }

    public function censurar($id=null) {


        $actualiza = $this->articulos_model->visibilidad($id,false);
        
        if ($actualiza) {
            $data1 = array(
                    'content' => 'Censurado',
                    'results' => $this->articulos_model->get_All_articulos()
                );
            $data = array(
                'titulo' => 'CMS para móbiles ',
                'descripcion' => 'CMS para móbiles en codeigniter',
                'metadatos' => 'metadatos',
                'content' => $this->load->view("includes/admin/articulos_admin/articulos_admin_view", $data1, true)
            );
            $this->load->view('includes/admin/theme/template_view', $data);
        } else {
            $data1 = array(
                    'content' => 'No Censurado',
                    'results' => $this->articulos_model->get_articulo($id)
                );
            $data = array(
                'titulo' => 'CMS para móbiles ',
                'descripcion' => 'CMS para móbiles en codeigniter',
                'metadatos' => 'metadatos',
                'content' => $this->load->view("includes/admin/articulos_admin/articulo_admin_view", $data1, true)
            );
            $this->load->view('includes/admin/theme/template_view', $data);
        }
    }
    
    public function publicar($id=null) {


        $actualiza = $this->articulos_model->visibilidad($id, true);
        
        if ($actualiza) {
            $data1 = array(
                    'content' => 'Publicado',
                    'results' => $this->articulos_model->get_All_articulos()
                );
            $data = array(
                'titulo' => 'CMS para móbiles ',
                'descripcion' => 'CMS para móbiles en codeigniter',
                'metadatos' => 'metadatos',
                'content' => $this->load->view("includes/admin/articulos_admin/articulos_admin_view", $data1, true)
            );
            $this->load->view('includes/admin/theme/template_view', $data);
        } else {
            $data1 = array(
                    'content' => 'Error',
                    'results' => $this->articulos_model->get_articulo($id)
                );
            $data = array(
                'titulo' => 'CMS para móbiles ',
                'descripcion' => 'CMS para móbiles en codeigniter',
                'metadatos' => 'metadatos',
                'content' => $this->load->view("includes/admin/articulos_admin/articulo_admin_view", $data1, true)
            );
            $this->load->view('includes/admin/theme/template_view', $data);
        }
    }

}
