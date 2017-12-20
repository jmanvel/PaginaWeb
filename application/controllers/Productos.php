<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Productos extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("productos/index");
        $this->load->view("include/footer");
    }

    public function sce_carga() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("productos/sce_carga");
        $this->load->view("include/footer");
    }

    public function sce_aduanas() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("productos/sce_aduanas");
        $this->load->view("include/footer");
    }

    public function sce_transporte() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("productos/sce_transporte");
        $this->load->view("include/footer");
    }

    public function sce_almacen() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("productos/sce_almacen");
        $this->load->view("include/footer");
    }

    public function sce_doctel() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("productos/sce_doctel");
        $this->load->view("include/footer");
    }

    public function productos_de_valor_agregado() {
        $this->load->view("include/head");
        $this->load->view("include/nav");
        $this->load->view("include/fecha_cambio");
        $this->load->view("productos/productos_de_valor_agregado");
        $this->load->view("include/footer");
    }

}
