

<?php

$data = array(
    'titulo' => $titulo,
    'descripcion' => $descripcion,
    'metadatos' => $metadatos,
    'content' => $content
);

$this->load->view('includes/front/theme/header_view', $data);
$this->load->view('includes/front/theme/sidebar_view');
$this->load->view('includes/front/theme/content_view', $data);
$this->load->view('includes/front/theme/footer_view');

?>

