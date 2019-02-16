<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Teste extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Teste_model');
    }
    public function index(){
        $dados = array(
            'css'=>array(
                base_url('assets/css/Teste/teste.css'),
                'https://unpkg.com/leaflet@1.0.1/dist/leaflet.css',
                'https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.11/combined/css/gijgo.min.css',
                base_url("assets/Libs/Leaflet.awesome-markers/dist/leaflet.awesome-markers.css")

                


            ),
            'js'=>array(
                'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js',
                base_url('assets/js/Teste/teste.js'),
                'https://unpkg.com/leaflet@1.0.1/dist/leaflet.js',
                'https://cdnjs.cloudflare.com/ajax/libs/gijgo/1.9.11/combined/js/gijgo.min.js',
                base_url("assets/Libs/Leaflet.awesome-markers/dist/leaflet.awesome-markers.min.js")


            )

        );
        $this->load->template("Teste/teste",$dados);
    }
    
}
?>