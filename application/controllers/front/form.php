<?php

class Form extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('includes/front/articulos/insertar_view');
		}
		else
		{
                    
                        
			$this->load->view('includes/front/articulos/formsuccess');
		}
	}
}
?>
