<?php

class repertorio_model extends CI_Model{


    function get_lista_repertorio(){
        $this->db->select('*');
        $this->db->from('t_fotoxrepertorio');
        $this->db->join('t_repertorio', 't_repertorio.rep_codigo = t_fotoxrepertorio.rep_codigo');
        $query = $this->db->get();
        return $query->result_array();

    }

    function get_lista_repertorio_lista()
    {
        $query = $this->db->get("t_repertorio");

        return $query->result_array();

    }

    function get_lista_repertorio_activo(){

        $this->db->select('*');
        $this->db->from('t_fotoxrepertorio');
        $this->db->join('t_repertorio', 't_repertorio.rep_codigo = t_fotoxrepertorio.rep_codigo');
        $this->db->where('rep_estado',1);
        $query = $this->db->get();
        return $query->result_array();



    }
    function get_count_sillas_disponibles()
    {
        $query = "SELECT req_obra,rep_cantidad as activas
        FROM t_repertorio
        WHERE res_activo = 1";
        $result = $this->db->query($query);
        $obra = $result->result_array();
        $totalreservas = $obra[0]['activas'];
        return $totalreservas;
    }
    function guardar_repertorio(){

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

        $this->db->insert("t_repertorio", $data);
    }

    function get_repertorio($id){
        $query = $this->db->get_where('t_repertorio', array('rep_codigo' => $id));

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

    }

    function del_repertorio($id)
    {

        $this->db->where("rep_codigo", $id);
        $this->db->delete('t_repertorio');

    }


}