<?php

class repertorio_model extends CI_Model
{


    function get_lista_repertorio()
    {
        $this->db->select('*');
        $this->db->from('t_fotoxrepertorio');
        $this->db->join('t_repertorio', 't_repertorio.rep_codigo = t_fotoxrepertorio.rep_codigo');
        $query = $this->db->get();
        return $query->result_array();

    }

    function get_lista_fechaxrepertorio()
    {
        $this->db->select('*');
        $this->db->from('t_fechaxrepertorio');
        $this->db->join('t_repertorio', 't_repertorio.rep_codigo = t_fechaxrepertorio.rep_codigo');
        $query = $this->db->get();
        return $query->result_array();

    }

    function get_lista_repertorio_lista()
    {
        $query = $this->db->get("t_repertorio");

        return $query->result_array();

    }

    function get_lista_repertorio_activo()
    {

        $this->db->select('*');
        $this->db->from('t_fotoxrepertorio');
        $this->db->join('t_repertorio', 't_repertorio.rep_codigo = t_fotoxrepertorio.rep_codigo');
        $this->db->where('rep_estado', 1);
        $query = $this->db->get();
        return $query->result_array();


    }


    function guardar_repertorio()
    {

        $data = array(
            "rep_obra" => $this->input->post("obra"),
            "rep_autor" => $this->input->post("autor"),
            "rep_director" => $this->input->post("director"),
            "rep_genero" => $this->input->post("genero"),
            "rep_duracion" => $this->input->post("duracion"),
            "rep_sinopsis" => $this->input->post("sinopsis"),
            "rep_tiempomon" => $this->input->post("tiempomon"),
            "rep_tiempodes" => $this->input->post("tiempodes"),
            "rep_estado" => $this->input->post("estado"),
            "rep_temporada" => $this->input->post("temporada"),
            "rep_cantidad" => $this->input->post("cantidad")
        );

        $this->db->insert("t_repertorio", $data);

    }

    function guardar_fechaxrepertorio()
    {

        $data = array(
            "rep_codigo" => $this->input->post("obra"),
            "fxr_fecha" => $this->input->post("fecha"),
            "fxr_sillas" => $this->input->post("sillas")
        );

        $this->db->insert("t_fechaxrepertorio", $data);
    }

    function get_repertorio($id)
    {
        $query = $this->db->get_where('t_repertorio', array('rep_codigo' => $id));

        return $query->result_array();

    }
   function get_fechaxrepertorio($id)
    {

        $this->db->select('*');
        $this->db->from('t_fechaxrepertorio');
        $this->db->join('t_repertorio', 't_repertorio.rep_codigo = t_fechaxrepertorio.rep_codigo');
        $this->db->where('fxr_codigo', $id);
        $query = $this->db->get();
        return $query->result_array();


    }

    function upd_repertorio()
    {
        $data = array(
            "rep_obra" => $this->input->post("obra"),
            "rep_director" => $this->input->post("director"),
            "rep_genero" => $this->input->post("genero"),
            "rep_duracion" => $this->input->post("duracion"),
            "rep_sinopsis" => $this->input->post("sinopsis"),
            "rep_tiempomon" => $this->input->post("tiempomon"),
            "rep_tiempodes" => $this->input->post("tiempodes"),
            "rep_estado" => $this->input->post("estado"),
            "rep_temporada" => $this->input->post("temporada"),
            "rep_cantidad" => $this->input->post("cantidad")

        );

        $this->db->where("rep_codigo", $this->input->post("rep_codigo"));
        $this->db->update('t_repertorio', $data);

    }  function upd_fechaxrepertorio()
    {
        $data = array(
            "rep_codigo" => $this->input->post("obra"),
            "fxr_fecha" => $this->input->post("fecha"),
            "fxr_sillas" => $this->input->post("sillas")

        );

        $this->db->where("fxr_codigo", $this->input->post("fxr_codigo"));
        $this->db->update('t_fechaxrepertorio', $data);

    }

    function del_repertorio($id)
    {

        $this->db->where("rep_codigo", $id);
        $this->db->delete('t_repertorio');

    }  function del_fechaxrepertorio($id)
    {

        $this->db->where("fxr_codigo", $id);
        $this->db->delete('t_fechaxrepertorio');

    }


}