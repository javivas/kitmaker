<?php

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
        ),
        array(
            'field' => 'publica',
            'label' => 'Visible',
            'rules' => 'required'
        ),
    )
);

?>
