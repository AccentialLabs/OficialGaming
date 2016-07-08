<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe responsavel pelo gerenciamento dos MODs and PACKs
 *
 * @author user
 */
class Addon extends CI_Controller {

    //put your code here

    /* acrescentamos o construct como primero passo */
    public function __construct() {
        parent::__construct();

        $this->load->model('modpackcomponents_model');
        $this->load->model('modpackcomponentsrespostas_model');
        $this->load->helper('url_helper');
    }

    public function index() {

        $data['titulo'] = "MODs/Packs";

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');

        $this->load->view('templates/gaming_default');
        $this->load->view('addon/index', $data);
    }

    public function skillCompetenceEditComponents() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/skill_competence_edit_components', $data);
    }

    public function goalPackEditComponents() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/goal_pack_edit_components', $data);
    }

    public function minigameFaceFactsEditComponents() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/minigame_face_facts_edit_components', $data);
    }

    public function sobreModpack() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/sobre_modpack', $data);
    }

    public function modpackEdit() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/modpack_edit', $data);
    }

    /**
     * 
     */
    public function editSkillCompetencePack() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');

        $data['componentes'] = $this->modpackcomponents_model->select_components_by_components_skill();

        $this->load->view('templates/gaming_default');
        $this->load->view('addon/edit_skill_competence_pack', $data);
    }

    public function editGoalPack() {

        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');
        $this->load->view('templates/gaming_default');
        $this->load->view('addon/edit_goal_pack', $data);
    }

    public function editMinigameFaceFacts() {
        $this->load->library('session');
        $data['empresa'] = $this->session->userdata('empresaLogada');

        $data['componentes'] = $this->modpackcomponents_model->select_components_by_face_facts();

        $this->load->view('templates/gaming_default');
        $this->load->view('addon/edit_minigame_face_facts', $data);
    }

    /**
     * Cadastra componentes para o MOD/PACK FACE FACTS
     */
    public function cadFaceFactsComponents() {

        $respostas = $this->input->post('respostas');

        $data = $this->modpackcomponents_model->insert_component_by_face_facts();
        // print_r($data);

        foreach ($respostas as $resposta) {

            $resposta['status'] = 1;
            $resposta['modpackcomponent_id'] = $data;

            $this->modpackcomponentsrespostas_model->insert_resposta($resposta);
        }

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('addon/minigameFaceFactsEditComponents', 'refresh');
    }

    public function cadSkillCompetenceComponents() {

        $respostas = $this->input->post('respostas');

        $data = $this->modpackcomponents_model->insert_component_by_components_skill();

        print_r($data);

        foreach ($respostas as $resposta) {

            $resposta['status'] = 1;
            $resposta['modpackcomponent_id'] = $data;

            $this->modpackcomponentsrespostas_model->insert_resposta($resposta);
        }

        $this->load->library('session');
        $this->session->set_flashdata("cadSucesso", "Cadastrado com sucesso!!!");
        redirect('addon/skillCompetenceEditComponents', 'refresh');
    }

}
