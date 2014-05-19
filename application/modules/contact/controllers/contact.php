<?php
    class Contact extends MX_Controller{
        public function __construct() {
            parent::__construct();
        }
        
        public function index(){
            $data["modules"]="contact";
            $data["file_view"]="contact_page";
            
            echo Modules::run("template/public_view",$data);
        }
    }
