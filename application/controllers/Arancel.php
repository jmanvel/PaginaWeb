<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Arancel extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("arancel");
        $this->load->view("include/footer");
    }

    public function subpartida() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("subpartida");
        $this->load->view("include/footer");
    }

    public function partida() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("partida");
        $this->load->view("include/footer");
    }

}
