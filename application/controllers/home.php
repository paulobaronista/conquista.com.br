<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Conquista Arbore - seu sonho ao seu alcance!';
        $data['description'] = 'Hora de conquistar a vida que sempre sonhou!';
        $data['keywords'] = 'conquista, arboreengenharia, elevador, 1 vaga, documentação, grátis';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function politicadeprivacidade()
    {
        $data['title'] = 'Conquista Arbore - seu sonho ao seu alcance!';
        $data['description'] = 'Hora de conquistar a vida que sempre sonhou!';
        $data['keywords'] = 'conquista, arboreengenharia, elevador, 1 vaga, documentação, grátis';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/home.php */
