<?php
    class About extends MX_Controller{
        public function __construct() {
            parent::__construct();
        }
        
        public function index(){
            $data["modules"]="about";
            $data["file_view"]="about_page";
            echo Modules::run("template/public_view",$data);
        }
    }
