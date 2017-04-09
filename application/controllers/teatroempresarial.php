<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class teatroempresarial extends CI_Controller{

    function __construct()    {
        parent::__construct();
        $this->load->model("teatroempresarial_model");
    }

    public function index(){


            $content = array(

                "main_content" => "back_end/lista_teatroempresarial_view",
                "teatroempresarial" => $this->teatroempresarial_model->get_lista_teatroempresarial()//Pendiente
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }

    public function index_fotos(){


        $content = array(

            "main_content" => "back_end/lista_teatroempresarial_foto_view",
            "teatroempresarial_foto" => $this->teatroempresarial_model->get_lista_teatroempresarial_foto()//Pendiente
        );

        $this->load->view("plantillas/back_end/admin_template", $content);
    }
    public function do_upload()
    {
        // Revisamos si se ha subido algo
        if (isset($_POST['submit'])) {
            // Cargamos la libreria Upload
            $this->load->library('upload');
            /*
             * Revisamos si el archivo fue subido
             * Comprobamos si existen errores en el archivo subido
             */
            if (!empty($_FILES['userfile']['name']))
            {
                // Configuración para el Archivo 1
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '99999';
                $config['max_width'] = '10000';
                $config['max_height'] = '10000';
                // Cargamos la configuración del Archivo 1
                $this->upload->initialize($config);
                // Subimos archivo 1
                if ($this->upload->do_upload('userfile')) {

                    $data = $this->upload->data();
                    $imagen1 = $data['file_name'];
                } else {
                    echo $this->upload->display_errors();
                }
            }
            // Revisamos si existe un segundo archivo

        } else {
            redirect('teatroempresarial', 'refresh');
        }
        $this->guardar_teatroempresarial_foto($imagen1);
        redirect('teatroempresarial', 'refresh');
    }

    public function nuevo_teatroempresarial(){

        if($this->session->userdata('logged_in'))
        {
            $content = array(

                "main_content" => "back_end/nuevo_teatroempresarial_view"
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }
    public function nuevo_teatroempresarial_foto(){

        if($this->session->userdata('logged_in'))
        {
            $content = array(

                "main_content" => "back_end/nuevo_teatroempresarial_foto_view"
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }
    function guardar_teatroempresarial(){

        if($this->session->userdata('logged_in'))
        {

            $this->teatroempresarial_model->guardar_teatroempresarial();
            redirect('teatroempresarial', 'refresh');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function guardar_teatroempresarial_foto($foto1)
    {

        if ($this->session->userdata('logged_in')) {

            $this->teatroempresarial_model->guardar_teatroempresarial_foto($foto1);
            redirect('teatroempresarial/index_fotos', 'refresh');
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function editar($id)
    {

        if($this->session->userdata('logged_in'))
        {
            $content = array(

                "teatroempresarial" => $this->teatroempresarial_model->get_teatroempresarial($id),
                "main_content" => "back_end/editar_teatroempresarial_view"
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

            $this->teatroempresarial_model->del_teatroempresarial($id);
            redirect('teatroempresarial', 'refresh');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    public function del_foto($id)
    {

        if($this->session->userdata('logged_in'))
        {

            $this->teatroempresarial_model->del_teatroempresarial_foto($id);
            redirect('teatroempresarial/index_fotos', 'refresh');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function upd_teatroempresarial()
    {

        if($this->session->userdata('logged_in'))
        {
            $this->teatroempresarial_model->upd_teatroempresarial();
            redirect("teatroempresarial", "refresh");
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function del_teatroempresarial()
    {
        $arr = $this->session->userdata('logged_in');
        if($this->session->userdata('logged_in'))
        {

            $this->teatroempresarial_model->del_teatroempresarial();
            redirect("teatroempresarial", "refresh");
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }


}

