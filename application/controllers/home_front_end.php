<?php

class home_front_end extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('repertorio_model');
        $this->load->model('banner_model');
        $this->load->model('formacion_model');
        $this->load->model('teatroempresarial_model');
        $this->load->model('quienessomos_model');
    }
    public function index()
    {
        $content = array(


            "repertorios" => $this->repertorio_model->get_lista_repertorio(),//Pendiente
            "repertoriosactivos" => $this->repertorio_model->get_lista_repertorio_activo(),//Pendiente
            "banner" => $this->banner_model->get_lista_banner_activo(),//Pendiente
            "formaciongrande" => $this->formacion_model->get_lista_formacion_grande(),//Pendiente
            "formacionpequeño" => $this->formacion_model->get_lista_formacion_pequeño(),//Pendiente
            "teatroempresarial" => $this->teatroempresarial_model->get_lista_teatroempresarial(),//Pendiente
            "fototeatroempresarial" => $this->teatroempresarial_model->get_lista_teatroempresarial_foto(),//Pendiente
            "quienessomos" => $this->quienessomos_model->get_lista_quienessomos()//Pendiente



        );

        $this->load->view('plantillas/front_end/admin_template',$content);

    }
}