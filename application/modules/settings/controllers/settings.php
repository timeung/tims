<?php
    class Settings extends MX_Controller{
        public function __construct() {
            parent::__construct();
        }
        
        
        public function index(){
            $data["modules"]="settings";
            $data["file_view"]="settings_page";
            
            
            echo Modules::run("template/admin_panel",$data);
        }
    }
