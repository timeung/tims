<?php
    class Download extends MX_Controller{
        public function __construct() {
            parent::__construct();
        }
        
        public function index(){
            $data["modules"]="download";
            $data["file_view"]="download_page";
            
            echo Modules::run("template/public_view",$data);
        }
    }
