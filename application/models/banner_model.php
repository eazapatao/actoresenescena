<?php

class banner_model extends CI_Model
{


    function get_lista_banner()
    {
        $this->db->select('*');
        $this->db->from('t_banner');
        $query = $this->db->get();
        return $query->result_array();

    }

    function get_lista_banner_activo()
    {

        $this->db->select('*');
        $this->db->from('t_banner');
        $this->db->where('ban_activo', 1);
        $query = $this->db->get();
        return $query->result_array();
    }


    function guardar_banner($foto)
    {

        $data = array(
            "ban_fotografia" => $foto,
            "ban_activo" => $this->input->post("activo")
        );

        $this->db->insert("t_banner", $data);
    }

    function get_banner($id)
    {
        $query = $this->db->get_where('t_banner', array('ban_codigo' => $id));

        return $query->result_array();

    }

    function upd_banner()
    {
        $data = array(
            "ban_activo" => $this->input->post("activo")
        );

        $this->db->where("ban_codigo", $this->input->post("ban_codigo"));
        $this->db->update('t_banner', $data);

    }

    function del_banner($id)
    {

        $this->db->where("ban_codigo", $id);
        $this->db->delete('t_banner');

    }


}