<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class imagen extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("imagen_model");
        $this->load->model("repertorio_model");
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {


        $content = array(

            "main_content" => "back_end/lista_repertorio_foto_view",
            "repertorios_foto" => $this->imagen_model->get_lista_repertorio_foto(),

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
            if (!empty($_FILES['userfile1']['name'])) {
                // La configuración del Archivo 2, debe ser diferente del archivo 1
                // si configuras como el Archivo 1 no hará nada
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '99999';
                $config['max_width'] = '10000';
                $config['max_height'] = '10000';
                // Cargamos la nueva configuración
                $this->upload->initialize($config);
                // Subimos el segundo Archivo
                if ($this->upload->do_upload('userfile1')) {

                    $data = $this->upload->data();
                    $imagen2 = $data['file_name'];
                } else {
                    echo $this->upload->display_errors();
                }
            }
        } else {
            redirect('imagen', 'refresh');
        }
        $this->guardar_repertorio_foto($imagen1,$imagen2);
        redirect('imagen', 'refresh');
    }

    public function nuevo_repertorio_foto()
    {

        if ($this->session->userdata('logged_in')) {
            $content = array(

                "main_content" => "back_end/nuevo_repertorio_foto_view",
                "repertorios" => $this->repertorio_model->get_lista_repertorio_lista()
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function guardar_repertorio_foto($foto1,$foto2)
    {

        if ($this->session->userdata('logged_in')) {

            $this->imagen_model->guardar_repertorio_foto($foto1,$foto2);
            redirect('imagen', 'refresh');
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function editar($id)
    {

        if ($this->session->userdata('logged_in')) {
            $content = array(

                "repertorios_foto" => $this->imagen_model->get_repertorio_foto($id),
                "main_content" => "back_end/editar_repertorio_foto_view"
            );

            $this->load->view("plantillas/back_end/admin_template", $content);
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    public function del($id)
    {

        if ($this->session->userdata('logged_in')) {
            echo $id;
            $this->imagen_model->del_repertorio_foto($id);
            redirect('imagen', 'refresh');
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function upd_repertorio()
    {

        if ($this->session->userdata('logged_in')) {
            $this->repertorio_model->upd_repertorio_foto();
            redirect("imagen", "refresh");
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }

    }

    function del_repertorio()
    {
        $arr = $this->session->userdata('logged_in');
        if ($this->session->userdata('logged_in')) {

            $this->imagen_model->del_repertorio_foto();
            redirect("imagen", "refresh");
        } else {
            //If no session, redirect to login page
            redirect('login', 'refresh');
        }
    }
}

