<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/**
* Articulos_admin
*
* @uses     CI_Controller
* @package  Kitmaker
* @version  1.0
* @author   javivas
*
* Description: Controlador para la gestión de posts/artículos por parte del administrador.
*
*/
class Articulos_admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('articulos_model'));
    }
    //muestra todos los artículos
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
    
    //muestra todos los artículos censurados
    public function censurados() {

        $result['results'] = $this->articulos_model->get_all_articulos_censurados();
        
        $data = array(
            'titulo' => 'CMS para móbiles',
            'descripcion' => 'CMS para móbiles en codeigniter',
            'metadatos' => 'metadatos',
            'content' => $this->load->view("includes/admin/articulos_admin/articulos_admin_view", $result, true)
        );

        $this->load->view('includes/admin/theme/template_view', $data);
    }
    //muestra un artículo y posibilita censura/publicacion
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
    
    
    
    //censura un artículo
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
    //publica un artículo
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
