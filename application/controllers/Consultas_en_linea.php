<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Consultas_en_linea extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function arancel_de_aduanas() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("consultas/arancel");
        $this->load->view("include/footer");
    }

    public function arancel_subpartida() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("consultas/arancel_subpartida");
        $this->load->view("include/footer");
    }

    public function arancel_partida() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("consultas/arancel_partida");
        $this->load->view("include/footer");
    }
    
    public function boletines_quimicos() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("consultas/boletines");
        $this->load->view("include/footer");
    }
    
    public function boletin_detalle(){
        $this->load->view("consultas/boletines_detalle");
    }

}
