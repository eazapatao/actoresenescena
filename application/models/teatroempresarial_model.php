<?php

class teatroempresarial_model extends CI_Model{


    function get_lista_teatroempresarial(){
        $this->db->select('*');
        $this->db->from('t_teatroempresarial');
        $query = $this->db->get();
        return $query->result_array();

    }

    function get_lista_teatroempresarial_foto(){
        $this->db->select('*');
        $this->db->from('t_fotoxteatroempresarial');
        $query = $this->db->get();
        return $query->result_array();

    }
    function guardar_teatroempresarial(){

        $data = array(
            "tea_descripcion" => $this->input->post("descripcion")

        );

        $this->db->insert("t_teatroempresarial", $data);
    }

    function guardar_teatroempresarial_foto($foto1){

        $data = array(
            "fxt_empresa" => $this->input->post("nombre"),
            "fxt_fotografia" => $foto1
        );

        $this->db->insert("t_fotoxteatroempresarial", $data);
    }

    function get_teatroempresarial($id){
        $query = $this->db->get_where('t_teatroempresarial', array('tea_codigo' => $id));

        return $query->result_array();

    }

    function upd_teatroempresarial()
    {
        $data = array(
            "tea_descripcion" => $this->input->post("descripcion")

        );

        $this->db->where("tea_codigo", $this->input->post("tea_codigo"));
        $this->db->update('t_teatroempresarial', $data);

    }

    function del_teatroempresarial($id)
    {

        $this->db->where("tea_codigo", $id);
        $this->db->delete('t_teatroempresarial');

    }
    function del_teatroempresarial_foto($id)
    {

        $this->db->where("fxt_codigo", $id);
        $this->db->delete('t_fotoxteatroempresarial');

    }

}