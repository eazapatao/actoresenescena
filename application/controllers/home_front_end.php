<?php

class home_front_end extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('repertorio_model');
    }
    public function index()
    {
        $content = array(


            "repertorios" => $this->repertorio_model->get_lista_repertorio(),//Pendiente
            "repertoriosactivos" => $this->repertorio_model->get_lista_repertorio_activo()//Pendiente



        );

        $this->load->view('plantillas/front_end/admin_template',$content);

    }
}