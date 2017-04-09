<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class banner extends CI_Controller{

    function __construct()    {
        parent::__construct();
        $this->load->model("banner_model");
    }

    public function index(){


            $content = array(

                "main_content" => "back_end/lista_banner_view",
                "banner" => $this->banner_model->get_lista_banner()//Pendiente
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }




    public function nuevo_banner(){

        if($this->session->userdata('logged_in'))
        {
            $content = array(

                "main_content" => "back_end/nuevo_banner_view"
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }
    function guardar_banner($foto1)
    {

        if ($this->session->userdata('logged_in')) {

            $this->banner_model->guardar_banner($foto1);
            redirect('banner', 'refresh');
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

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
            redirect('banner', 'refresh');
        }
        $this->guardar_banner($imagen1);
        redirect('banner', 'refresh');
    }

    function editar($id)
    {

        if($this->session->userdata('logged_in'))
        {
            $content = array(

                "banner" => $this->banner_model->get_banner($id),
                "main_content" => "back_end/editar_banner_view"
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

            $this->banner_model->del_banner($id);
            redirect('banner', 'refresh');
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function upd_banner()
    {

        if($this->session->userdata('logged_in'))
        {
            $this->banner_model->upd_banner();
            redirect("banner", "refresh");
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function del_banner()
    {
        $arr = $this->session->userdata('logged_in');
        if($this->session->userdata('logged_in'))
        {

            $this->banner_model->del_banner();
            redirect("banner", "refresh");
        }
        else
        {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }


}

