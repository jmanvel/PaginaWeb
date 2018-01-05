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

    public function boletin_detalle() {
        $this->load->view("consultas/boletines_detalle");
    }

    public function dam_numeradas() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("consultas/dam_numeradas");
        $this->load->view("include/footer");
    }

    public function normas_legales() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("consultas/normas_legales");
        $this->load->view("include/footer");
    }

    public function resoluciones_arancelarias() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("consultas/resoluciones_arancelarias");
        $this->load->view("include/footer");
    }

    public function tipo_de_cambio_tamex() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("consultas/tipo_de_cambio_tamex");
        $this->load->view("include/footer");
    }

    public function links_de_ayuda() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("consultas/links_de_ayuda");
        $this->load->view("include/footer");
    }

    public function informes_aduaneros() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("consultas/informes_aduaneros");
        $this->load->view("include/footer");
    }

    public function ley_lga() {
        $data["titulo"] = "LEY GRAL. DE ADUANAS";
        $data["archivo"] = "LeyGralDeAduana";
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("pdf", $data);
        $this->load->view("include/footer");
    }

    public function reglamento_lga() {
        $data["titulo"] = "REGLAMENTO DE LGA";
        $data["archivo"] = "ReglamentoDeLaLeyGralDeAduana";
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("pdf", $data);
        $this->load->view("include/footer");
    }

    public function instructivo_dam() {
        $data["titulo"] = "Instructivo DAM";
        $data["archivo"] = "InstructivoLlenadoDUA";
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("pdf", $data);
        $this->load->view("include/footer");
    }

}
