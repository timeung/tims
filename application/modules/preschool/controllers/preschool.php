<?php
    class Preschool extends MX_Controller{
        public function __construct() {
            parent::__construct();
        }
        
        public function index(){
            $data["modules"]="preschool";
            $data["file_view"]="preschool_page";
            
            echo Modules::run("template/public_view",$data);
        }
    }
