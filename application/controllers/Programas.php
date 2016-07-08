<?php   

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Programas extends CI_Controller {
    //put your code here
    
    /*acrescentamos o construct como primero passo*/
     public function __construct() {
        parent::__construct();
        $this->load->model('programas_model');  //model das tabelas programa e telas("Arg programas" e "cadastrar programas");
        $this->load->model('objetos_model'); //model e tabela ojetos que contém a pagina ->cadastrar programas por conta da tabela;
        $this->load->model('equipestab_model');
        $this->load->model('desafio_model');
        $this->load->helper('url_helper');
    }
    /*Fim do construct*/
    
    public function argProgramas(){
        
        /*tela padrão cabeçalho e rodapé*/
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /*tela padrão cabeçalho e rodapé*/
    
        $data['programas'] = $this->programas_model->get_programas();
        
        $this->load->view('templates/gaming_default');
        $this->load->view('programas/argProgramas',$data);
    }
    
     public function cadastrarDesafio(){
         
         /*tela padrão cabeçalho e rodapé*/
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /*tela padrão cabeçalho e rodapé*/
        
        $data['desafio'] = $this->desafio_model->get_desafio(); //tela
        $data['equipestab'] = $this->equipestab_model->get_equipestab(); //tabelas
        $data['objetos'] = $this->objetos_model->get_objetos(); //tabelas
        
        $this->load->view('templates/gaming_default');
        $this->load->view('programas/cadastrarDesafio',$data);
    }  
    
     public function cadastrarProgramas(){
         
         /*tela padrão cabeçalho e rodapé*/
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresalogada');
        /*tela padrão cabeçalho e rodapé*/
         
     $data['objetos'] = $this->objetos_model->get_objetos();
     $data['programas'] = $this->programas_model->get_programas();
     
        $this->load->view('templates/gaming_default');
        $this->load->view('programas/cadastrarProgramas',$data);
    }
    
    //declaração do codigo do (cadastrarprogramas.js)
        public function createPrograma(){
        $this->programas_model->insert_programas();
        echo "sucesso";  
    }
    
       public function createDesafio(){
        $this->desafio_model->insert_desafio();
        echo "sucesso";  
    }
    
    //MUDANÇA DE STATUS DA TELA CADASTRAR DESAFIO (TABELA 1 E 2)
         /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusProgramas1() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('equipestab', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }
    
         /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusProgramas2() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('objetos', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }        //FIM MUDANÇA DE STATUS DA TELA CADASTRAR DESAFIO (TABELA 1 E 2)
    
       /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function mudaStatusProgramas() {

        $statusAtual = $this->input->post('statusAtual');

        $data = '';
        if ($statusAtual == 0) {
            $data['status'] = 1;
        } else {
            $data['status'] = 0;
        }

        $this->db->where('id', $this->input->post('id'));

        if ($this->db->update('programas', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }

    /**
     * Status:
     * 0 - INATIVO
     * 1 - ATIVO
     * 2 - EXCLUIDO
     */
    public function deleteProgramas() {

        $data['status'] = 2;

        $this->db->where('id', $this->input->post('id')); 

        if ($this->db->update('programas', $data)) {
            echo "sucesso";
        } else {
            echo "error";
        }
    }
    
}