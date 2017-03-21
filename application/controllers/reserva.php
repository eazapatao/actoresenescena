<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class reserva extends CI_Controller{

    function __construct()    {
        parent::__construct();
        $this->load->model("reserva_model");
        $this->load->model("repertorio_model");
        $this->load->helper('url');
        $this->load->library('session');
    }

    public function index(){


            $content = array(

                "main_content" => "back_end/lista_reserva_view",
                "reservas" => $this->reserva_model->get_lista_reserva_repertorio(),
                //"reservasactivas" => $this->reserva_model->get_count_reserva_activa()


            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }




    public function nuevo_reserva(){

        if($this->session->userdata('logged_in'))
        {
            $content = array(

                "main_content" => "back_end/nuevo_reserva_view",
                "obras" => $this->repertorio_model->get_lista_repertorio(),//Pendiente
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function guardar_reserva(){

        if($this->session->userdata('logged_in'))
        {

            $this->reserva_model->guardar_reserva();
            redirect('reserva', 'refresh');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function guardar_reservapublico(){


            $this->reserva_model->guardar_reservapublico();
            redirect('home_front_end', 'refresh');


       }

    function editar($id)
    {

        if($this->session->userdata('logged_in'))
        {
            $content = array(

                "reservas" => $this->reserva_model->get_reserva($id),
                "main_content" => "back_end/editar_reserva_view",
                "repertorios" => $this->reserva_model->get_lista_reserva_repertorio(),//Pendiente
                "repertoriosedicion" => $this->reserva_model->get_lista_reserva_repertorio_editar($id),//Pendiente
                "obras" => $this->repertorio_model->get_lista_repertorio()//Pendiente
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    public function del($id)
    {

        if($this->session->userdata('logged_in'))
        {

            $this->reserva_model->del_reserva($id);
            redirect('reserva', 'refresh');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function upd_reserva()
    {

        if($this->session->userdata('logged_in'))
        {
            $this->reserva_model->upd_reserva();
            redirect("reserva", "refresh");
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function del_reserva()
    {
        $arr = $this->session->userdata('logged_in');
        if($this->session->userdata('logged_in'))
        {

            $this->reserva_model->del_reserva();
            redirect("reserva", "refresh");
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
}

