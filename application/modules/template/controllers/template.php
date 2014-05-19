<?php
    class Template extends MX_Controller{
        public function __construct() {
            parent::__construct();
        }
        
        public function public_view($data){
            $this->load->view("public",$data);
        }
        
        public function admin_panel($data){
            $this->load->view("admin",$data);
        }
    }
