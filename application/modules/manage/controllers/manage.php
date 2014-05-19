<?php
    class Manage extends MX_Controller{
        public function __construct() {
            parent::__construct();
        }
        
        public function index(){
            $data["modules"]="manage";
            $data["file_view"]="manage_page";
            $data["page_header"]="Welcome to TIMS";
            echo Modules::run("template/admin_panel",$data);
        }
    }
