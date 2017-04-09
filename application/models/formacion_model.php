<?php

class formacion_model extends CI_Model
{


    function get_lista_formacion()
    {
        $this->db->select('*');
        $this->db->from('t_formacion');
        $query = $this->db->get();
        return $query->result_array();

    }
    function get_lista_formacion_grande()
    {
        $id='Grande';
        $query = $this->db->get_where('t_formacion', array('for_tipo' => $id));

        return $query->result_array();

    }
    function get_lista_formacion_pequeño()
    {
        $id='Pequeña';
        $query = $this->db->get_where('t_formacion', array('for_tipo' => $id));

        return $query->result_array();

    }


    function guardar_formacion($foto,$foto2)
    {

        $data = array(

            "for_titulo" => $this->input->post("titulo"),
            "for_descripcion" => $this->input->post("descripcion"),
            "for_fotografia" => $foto,
            "for_fotografia1" => $foto2,
            "for_tipo" => $this->input->post("tipo")
        );

        $this->db->insert("t_formacion", $data);
    }

    function get_formacion($id)
    {
        $query = $this->db->get_where('t_formacion', array('for_codigo' => $id));

        return $query->result_array();

    }

    function upd_formacion()
    {
        $data = array(
            "for_titulo" => $this->input->post("titulo"),
            "for_descripcion" => $this->input->post("descripcion"),
            "for_tipo" => $this->input->post("tipo")

        );

        $this->db->where("for_codigo", $this->input->post("for_codigo"));
        $this->db->update('t_formacion', $data);

    }

    function del_formacion($id)
    {

        $this->db->where("for_codigo", $id);
        $this->db->delete('t_formacion');

    }


}