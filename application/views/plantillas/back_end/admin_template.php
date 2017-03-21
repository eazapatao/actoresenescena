<?php
$CI =& get_instance();
$CI->load->model('usuario_model');

$this->load->view("plantillas/back_end/head");

$this->load->view("plantillas/back_end/header");
$this->load->view($main_content);
$this->load->view("plantillas/back_end/sidebar");

$this->load->view("plantillas/back_end/footer");



