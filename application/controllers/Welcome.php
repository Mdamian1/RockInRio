<?php

class Welcome extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
    }

    //print hello world
    public function index(){
        $dados['ViewName'] = 'index';
        $this->load->view('template', $dados);            
    }

    public function fotos() {
        $dados['ViewName'] = 'fotos';
        $this->load->view('template', $dados); 
    }


}