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

    public function musica() {
        $dados['ViewName'] = 'musica';
        $this->load->view('template', $dados); 
    }

    public function videos() {
        $dados['ViewName'] = 'videos';
        $this->load->view('template', $dados); 
    }
}