<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller{

    function __construct()    {
        parent::__construct();
        $this->load->model("repertorio_model");

    }

    public function index(){

        if($this->session->userdata('logged_in'))
        {
            $content = array(

                "main_content" => "back_end/bienvenida_view",
                "repertorios" => $this->repertorio_model->get_lista_repertorio()//Pendiente


            );

            $this->load->view("plantillas/back_end/admin_template",$content);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }




}

