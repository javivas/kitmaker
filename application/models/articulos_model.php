<?php
/**
* Articulos_Model
*
* @uses     CI_Model
* @package  Kitmaker
* @version  1.0
* @author   javivas
*
* Description: Gestión de Articulos/posts
*
*/
class Articulos_model extends CI_Model {
    //Todos los artículos en la BBDD
    function get_all_articulos() {
        $query = $this->db->query("SELECT * FROM articulos ORDER BY id DESC");
        return $query->result();
    }

    //Todos los artículos en la BBDD que con pública a true
    function get_public_articulos() {
        $query = $this->db->query("SELECT * FROM articulos WHERE publica=true ORDER BY id DESC");
        return $query->result();
    }
    //Los últimos 5 artículos en la BBDD que con pública a true
    function get_last_articulos() {
        $query = $this->db->query("SELECT * FROM articulos WHERE publica=true ORDER BY id DESC LIMIT 5");
        return $query->result();
    }
    // El artículo con id = $id
    function get_articulo($id) {
        $query = $this->db->query("SELECT * FROM articulos WHERE id=" . $id);
        return $query->result();
    }
    //insertar un artículo
    function insert_articulo($tit = null, $seccion = null, $cuerpo = null, $publica = null) {
        try {
            $data = array(
                'titulo' => $tit,
                'seccion' => $seccion,
                'cuerpo' => $cuerpo,
                'publica' => $publica
            );
            $this->db->insert('articulos', $data);
            return true;
        } catch (Exception $e) {
            echo "Error insertando artículo";
            return false;
        }
    }
    //Obtener el valor del atributo publica de un artículo con id = $id
    function get_visibilidad_articulo($id) {
        $query = $this->db->query("SELECT publica FROM articulos WHERE id=" . $id);
        if ($query->num_rows() > 0) {
            $row = $query->row();

            return $row->publica;
        } else {
            return null;
        }
    }
    //Cambiar el valor del atributo publica de un artículo con id= $id al valor $pub
    function visibilidad($id = null, $pub = null) {

        try {

            $data = array(
                'publica' => $pub
            );

            $this->db->where('id', $id);
            $this->db->update('articulos', $data);
            return true;
        } catch (Exception $e) {
            echo "Error modificando el estado de visibilidad del artículo";
            return false;
        }
    }

}