<?php

class imagen_model extends CI_Model{


    function get_lista_repertorio_foto(){


        $this->db->select('*');
        $this->db->from('t_fotoxrepertorio');
        $this->db->join('t_repertorio', 't_repertorio.rep_codigo = t_fotoxrepertorio.rep_codigo');
        $query = $this->db->get();
        return $query->result_array();


    }


    function guardar_repertorio_foto($foto1,$foto2){

        $data = array(
            "rep_codigo" => $this->input->post("obra"),
            "fxr_foto" => $foto1,
            "fxr_foto2" => $foto2
        );

        $this->db->insert("t_fotoxrepertorio", $data);
    }

    function get_repertorio_foto($id){

        $this->db->select('*');
        $this->db->from('t_fotoxrepertorio');
        $this->db->where('fxr_codigo', $id);
        $this->db->join('t_repertorio', 't_repertorio.rep_codigo = t_fotoxrepertorio.rep_codigo');
        $query = $this->db->get();
        return $query->result_array();




    }

    function upd_repertorio_foto()
    {
        $data = array(
            "rep_obra" => $this->input->post("obra"),
            "fxr_foto" => $this->input->post("foto"),
            "fxr_foto2" => $this->input->post("foto2")
        );

        $this->db->where("t_fotoxrepertorio", $this->input->post("fxr_codigo"));
        $this->db->update('t_fotoxrepertorio', $data);

    }

    function del_repertorio_foto($id)
    {

        $this->db->where("fxr_codigo", $id);
        $this->db->delete('t_fotoxrepertorio');

    }


}