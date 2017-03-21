<?php

class Usuario_model extends CI_Model{


    function get_lista_usuarios(){
        $this->db->select('*');
        $this->db->from('t_usuario');
        $query = $this->db->get();
        return $query->result_array();

    }



    function login($username, $password)
    {

        $this -> db -> select('usu_email, usu_password, usu_estado');
        $this -> db -> from('t_usuario');
        $this -> db -> where('usu_email', $username);
        $this -> db -> where('usu_password', $password);
        $this -> db -> limit(1);

        $query = $this -> db -> get();
        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }




}