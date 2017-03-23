<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller{
    function __construct()    {
        parent::__construct();
        $this->load->model("usuario_model");
    }
    function index()
    {

        if($this->session->userdata('logged_in'))
        {

            //If no session, redirect to login page
            redirect('admin', 'refresh');
        }
        else
        {
            $this->load->helper(array('form'));
            $this->load->view('back_end/login_view');
        }
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        redirect('login', 'refresh');
    }

}

