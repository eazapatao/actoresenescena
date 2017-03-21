<?php

class reserva_model extends CI_Model
{


    function get_lista_reserva()
    {
        $query = $this->db->get("t_reserva");

        return $query->result_array();

    }

    function get_count_reserva_activa()
    {

        $query = "SELECT (*) as activas
        FROM t_reserva
        WHERE res_activo = 1 ";
        $result = $this->db->query($query);
        $obra = $result->result_array();
        $totalreservas = $obra[0]['activas'];
        return $totalreservas;
    }

//Cantidad de reservas realizadas para la obra seleccionada
    function get_count_reserva_activa_reserva($obra)
    {

        $query = "SELECT sum(res_sillas) as activas
        FROM t_reserva
        WHERE res_activo = 1 and rep_codigo=$obra";
        $result = $this->db->query($query);
        $obra = $result->result_array();
        $totalreservas = $obra[0]['activas'];
        return $totalreservas;
    }

//Cantidad de máxima de reservaciones permitidas por el administrador
    function get_count_cantidad_reserva($obra)
    {

        $query = "SELECT rep_cantidad as cantidad
        FROM t_repertorio
        WHERE rep_codigo=$obra";
        $result = $this->db->query($query);
        $obra = $result->result_array();
        $totalreservas = $obra[0]['cantidad'];
        return $totalreservas;
    }

    function get_lista_reserva_repertorio()
    {
        $this->db->select('*');
        $this->db->from('t_reserva');
        $this->db->where('res_activo', 1);
        $this->db->join('t_repertorio', 't_repertorio.rep_codigo = t_reserva.rep_codigo');
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_lista_reserva_repertorio_editar($id)
    {
        $this->db->select('*');
        $this->db->from('t_reserva');
        $this->db->where('res_codigo', $id);
        $this->db->join('t_repertorio', 't_repertorio.rep_codigo = t_reserva.rep_codigo');
        $query = $this->db->get();
        return $query->result_array();
    }

    function guardar_reserva()
    {

        $data = array(
            "rep_codigo" => $this->input->post("obra"),
            "res_nombre" => $this->input->post("nombre"),
            "res_fecha" => $this->input->post("fecha"),
            "res_sillas" => $this->input->post("sillas"),
            "res_tipoboleta" => $this->input->post("tipoboleta"),
            "res_activo" => 1
        );

        $this->db->insert("t_reserva", $data);
    }


    function guardar_reservapublico()
    {
        $obra = $this->input->post("obra");
        $totalreservacionesactivas = $this->get_count_reserva_activa_reserva($obra);
        $totalreservaspermitidas = $this->get_count_cantidad_reserva($obra);
        $reservasdisponibles = $totalreservaspermitidas - $totalreservacionesactivas;
        if ($reservasdisponibles >= 1) {
            $nombreobra = $this->get_nombreobra($this->input->post("obra"));
            $sillas = $this->input->post("sillas");
            $fecha = $this->input->post("fecha");
            $nombre = $this->input->post("nombre");

            if($this->input->post("tipoboleta")==12000)
            {
                if($this->input->post("sillas")>1)
                {
                    $valorapagar = (($this->input->post("sillas")-1)*15000)+12000;
                }
                else
                {
                    $valorapagar=12000;
                }

            }
            else
            {
                $valorapagar = ($this->input->post("tipoboleta")) * ($this->input->post("sillas"));
            }


            $data = array(
                "rep_codigo" => $this->input->post("obra"),
                "res_nombre" => $this->input->post("nombre"),
                "res_fecha" => $this->input->post("fecha"),
                "res_sillas" => $this->input->post("sillas"),
                "res_tipoboleta" => $this->input->post("tipoboleta"),
                "res_email" => $this->input->post("correo"),
                "res_activo" => 1
            );

            $this->db->insert("t_reserva", $data);


            //cargamos la libreria email de ci
            $this->load->library("email");

            //configuracion para gmail
            $configGmail = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'andres.asi25@gmail.com',
                'smtp_pass' => '@ndres..1053%',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"
            );

            //cargamos la configuración para enviar con gmail
            $this->email->initialize($configGmail);

            $this->email->from('Actores en escena');
            $this->email->to($this->input->post("correo"));
            $this->email->subject('¡Su reserva se ha realizado satisfactoriamente!');
            $this->email->message('
     
       
        
        <br><p>Buen día: ' . $nombre . '
        <br><br>Se han reservado ' . $sillas . ' entradas para la función ' . $nombreobra . ' para la fecha ' . $fecha . '
        <br>
        Valor a pagar: $' . number_format($valorapagar) . '<br>
                    Importante<br>
                    1) El precio de reservación para suscriptores de la patria es de una (1) boleta por suscriptor<br>
                    2) Estudiantes con carnet deberán presentar su carnet activo para ingresar a la función<br>
                    3) La reserva se respetará hasta 10 minutos antes de la hora de la función.<br>
                    4) Si existen cambios en su reserva por favor informarlo</p>
        <br>¡Actores en escena 23 años de puro teatro! </p>');

            $this->email->send();
        } else {

            //cargamos la libreria email de ci
            $this->load->library("email");

            //configuracion para gmail
            $configGmail = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'andres.asi25@gmail.com',
                'smtp_pass' => '@ndres..1053%',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"
            );

            //cargamos la configuración para enviar con gmail
            $this->email->initialize($configGmail);

            $this->email->from('Actores en escena');
            $this->email->to($this->input->post("correo"));
            $this->email->subject('¡Lo sentimos, no tenemos reservaciones disponibles!');
            $this->email->message('<p>Buen día:
        <br><br>Le solicitamos disculpas, la cantidad de reservas disponibles se ha acabado, esperamos tenerte presente en el teatro
        en una proxima función.
        <br>
        <br>
                    Importante<br>
                    1) El precio de reservación para suscriptores de la patria es de una (1) boleta por suscriptor<br>
                    2) Estudiantes con carnet deberán presentar su carnet activo para ingresar a la función<br>
                    3) La reserva se respetará hasta 10 minutos antes de la hora de la función.<br>
                    4) Si existen cambios en su reserva por favor informarlo</p>
        <br>¡Actores en escena 23 años de puro teatro! </p> ');

            $this->email->send();
        }


    }


    function get_nombreobra($id)
    {

        $query = "SELECT rep_obra as obra
        FROM t_repertorio
        WHERE rep_codigo = '$id'";

        $result = $this->db->query($query);

        $obra = $result->result_array();
        $nombreobra = $obra[0]['obra'];

        return $nombreobra;

    }


    function get_reserva($id)
    {
        $query = $this->db->get_where('t_reserva', array('res_codigo' => $id));

        return $query->result_array();

    }


    function upd_reserva()
    {
        $data = array(
            "rep_codigo" => $this->input->post("obra"),
            "res_nombre" => $this->input->post("nombre"),
            "res_fecha" => $this->input->post("fecha"),
            "res_sillas" => $this->input->post("sillas"),
            "res_activo" => $this->input->post("checkin")

        );

        $this->db->where("res_codigo", $this->input->post("res_codigo"));
        $this->db->update('t_reserva', $data);

    }

    function del_reserva($id)
    {

        $this->db->where("res_codigo", $id);
        $this->db->delete('t_reserva');


    }
}