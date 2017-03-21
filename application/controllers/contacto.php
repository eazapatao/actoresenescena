<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contacto extends CI_Controller{

    function __construct()    {
        parent::__construct();
        $this->load->model("contacto_model");
    }

    public function index(){


            $content = array(

                "main_content" => "back_end/lista_contacto_view",
                "contactos" => $this->contacto_model->get_lista_contacto()//Pendiente
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }

    function guardar_contacto(){



            $this->contacto_model->guardar_contacto();
            redirect('home_front_end', 'refresh');


    }
    public function del($id)
    {

        if($this->session->userdata('logged_in'))
        {

            $this->contacto_model->del_contacto($id);
            redirect('contacto', 'refresh');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }



    function del_contacto()
    {
        $arr = $this->session->userdata('logged_in');
        if($this->session->userdata('logged_in'))
        {

            $this->contacto_model->del_contacto();
            redirect("contacto", "refresh");
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
}

