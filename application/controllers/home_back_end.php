<?php

class home_back_end extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

    }

   public function index ()
    {


        $this->load->view('plantillas/back_end/admin_template');
    }
}
?>