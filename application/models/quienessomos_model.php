<?php

class quienessomos_model extends CI_Model
{


    function get_lista_repertorio()
    {
        $this->db->select('*');
        $this->db->from('t_quienessomos');

        $query = $this->db->get();
        return $query->result_array();

    }

    function get_lista_quienessomos()
    {
        $query = $this->db->get("t_quienessomos");

        return $query->result_array();

    }


    function guardar_quienessomos($foto)
    {

        $data = array(
            "quie_nombre" => $this->input->post("nombre"),
            "quie_descripcion" => $this->input->post("descripcion"),
            "quie_twitter" => $this->input->post("twitter"),
            "quie_facebook" => $this->input->post("facebook"),
            "quie_instagram" => $this->input->post("instagram"),
            "quie_fotografia" => $foto
        );

        $this->db->insert("t_quienessomos", $data);
    }

    function get_quienessomos($id)
    {
        $query = $this->db->get_where('t_quienessomos', array('quie_codigo' => $id));

        return $query->result_array();

    }

    function upd_quienessomos()
    {
        $data = array(
            "quie_nombre" => $this->input->post("nombre"),
            "quie_descripcion" => $this->input->post("descripcion"),
            "quie_twitter" => $this->input->post("twitter"),
            "quie_facebook" => $this->input->post("facebook"),
            "quie_instagram" => $this->input->post("instagram"),
            "quie_fotografia" => $this->input->post("fotografia")
        );

        $this->db->where("quie_codigo", $this->input->post("quie_codigo"));
        $this->db->update('t_quienessomos', $data);

    }

    function del_quienessomos($id)
    {

        $this->db->where("quie_codigo", $id);
        $this->db->delete('t_quienessomos');

    }


}