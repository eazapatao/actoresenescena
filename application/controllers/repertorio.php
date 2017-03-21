<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class repertorio extends CI_Controller{

    function __construct()    {
        parent::__construct();
        $this->load->model("repertorio_model");
    }

    public function index(){


            $content = array(

                "main_content" => "back_end/lista_repertorio_view",
                "repertorios" => $this->repertorio_model->get_lista_repertorio_lista()//Pendiente
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }




    public function nuevo_repertorio(){

        if($this->session->userdata('logged_in'))
        {
            $content = array(

                "main_content" => "back_end/nuevo_repertorio_view"
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function guardar_repertorio(){

        if($this->session->userdata('logged_in'))
        {

            $this->repertorio_model->guardar_repertorio();
            redirect('repertorio', 'refresh');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function editar($id)
    {

        if($this->session->userdata('logged_in'))
        {
            $content = array(

                "repertorios" => $this->repertorio_model->get_repertorio($id),
                "main_content" => "back_end/editar_repertorio_view"
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

            $this->repertorio_model->del_repertorio($id);
            redirect('repertorio', 'refresh');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function upd_repertorio()
    {

        if($this->session->userdata('logged_in'))
        {
            $this->repertorio_model->upd_repertorio();
            redirect("repertorio", "refresh");
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function del_repertorio()
    {
        $arr = $this->session->userdata('logged_in');
        if($this->session->userdata('logged_in'))
        {

            $this->repertorio_model->del_repertorio();
            redirect("repertorio", "refresh");
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
}

