<?php
/**
* Dashboard
*
* @uses     CI_Controller
* @package  Kitmaker
* @version  1.0
* @author   javivas
*
* Description: BAKC-END Welcome y Estructura.
*
*/
class Dashboard extends CI_Controller{
    
    public function index(){
        
        $data['content'] = $this->load->view('includes/admin/dashboard/dashboard_view','',true);
        $this->load->view('includes/admin/theme/template_view',$data);//cambiar por el template_view de admin
    }
      
    
}
