<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
* Articulos
*
* @uses     CI_Controller
* @package  Kitmaker
* @version  1.0
* @author   javivas
*
* Description: Controlador para la gestión pública de artículos.
*
*/

class Articulos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('articulos_model'));
    }

    public function index() {

        $result['results'] = $this->articulos_model->get_public_articulos();
        $data = array(
            'titulo' => 'CMS para móbiles',
            'descripcion' => 'CMS para móbiles en codeigniter',
            'metadatos' => 'metadatos',
            'content' => $this->load->view("includes/front/articulos/articulos_view", $result, true)
        );

        $this->load->view('includes/front/theme/template_view', $data);
    }

    public function articulo($id = null) {

        $result['results'] = $this->articulos_model->get_articulo($id);
        $data = array(
            'titulo' => 'CMS para móbiles',
            'descripcion' => 'CMS para móbiles en codeigniter',
            'metadatos' => 'metadatos',
            'content' => $this->load->view("includes/front/articulos/articulo_view", $result, true)
        );
        $this->load->view('includes/front/theme/template_view', $data);
    }

    public function insertar() {
        
        $data = array(
            'titulo' => 'CMS para móbiles',
            'descripcion' => 'CMS para móbiles en codeigniter',
            'metadatos' => 'metadatos',
            'content' => $this->load->view("includes/front/articulos/insertar_view", '', true)
        );
        $this->load->view('includes/front/theme/template_view', $data);
    }

  

    public function insertar_Articulo() {


        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');


        $config = array(
            'articulos_crear' => array(
                array(
                    'field' => 'titulo',
                    'label' => 'Titulo',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'seccion',
                    'label' => 'Seccion',
                    'rules' => 'integer|required'
                ),
                array(
                    'field' => 'cuerpo',
                    'label' => 'Cuerpo',
                    'rules' => 'required'
                )
            )
        );
        $this->form_validation->set_rules($config['articulos_crear']);

        if ($this->form_validation->run() == FALSE) {
            $data1 = array('prueba' => 'Error validando formulario');
            $data = array(
                'titulo' => 'CMS para móbiles Error validando formulario',
                'descripcion' => 'CMS para móbiles en codeigniter',
                'metadatos' => 'metadatos',
                'content' => $this->load->view("includes/front/articulos/insertar_view", $data1, true)
            );
            $this->load->view('includes/front/theme/template_view', $data);  
            
        } else {

            $titulo = $this->input->post('titulo', true);
            $cuerpo = $this->input->post('cuerpo', true);
            $seccion = $this->input->post('seccion', true);
            $publica = $this->input->post('publica', true);
            
            //Se elimina la posibilidad por parte del usuario de decidir
            //si será o no pública. Siempre será pública
            //y será el administrador quien la censure
            /*if($publica[0]==1){
                $pub = true;
                
            }else{
                $pub = false;
               
            }*/
            $pub = true;
            
            
            $insert = $this->articulos_model->insert_articulo($titulo, $seccion, $cuerpo, $pub);
            if ($insert) {
                
                
                $data = array(
                    'titulo' => 'CMS para móbiles',
                    'descripcion' => 'CMS para móbiles en codeigniter',
                    'metadatos' => 'metadatos',
                    'content' => $this->load->view("includes/front/articulos/formsuccess", "", true)
                );
                $this->load->view('includes/front/theme/template_view', $data);
                
               
            } else {
                $data1 = array('prueba' => 'Error insertando el artículo');
                $data = array(
                    'titulo' => 'CMS para móbiles Error insertando el artículo',
                    'descripcion' => 'CMS para móbiles en codeigniter',
                    'metadatos' => 'metadatos',
                    'content' => $this->load->view("includes/front/articulos/insertar_view", $data1, true)
                );
                $this->load->view('includes/front/theme/template_view', $data);
            }
        }
    }

}
