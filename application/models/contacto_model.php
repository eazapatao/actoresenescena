<?php

class contacto_model extends CI_Model{


    function get_lista_contacto(){
        $query = $this->db->get("t_contacto");

        return $query->result_array();

    }


    function get_contacto($id){
        $query = $this->db->get_where('t_contacto', array('con_codigo' => $id));

        return $query->result_array();

    }
    function guardar_contacto(){

        $data = array(
            "con_nombre" => $this->input->post("nombre"),
            "con_email" => $this->input->post("email"),
            "con_asunto" => $this->input->post("asunto"),
            "con_mensaje" => $this->input->post("mensaje"),
            "con_fecha" => date("Y-m-d")
        );

        $this->db->insert("t_contacto", $data);
    }

    function del_contacto($id)
    {

        $this->db->where("con_codigo", $id);
        $this->db->delete('t_contacto');

    }


}