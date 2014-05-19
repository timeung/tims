<?php
class Dashboard extends MX_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $data["modules"]="dashboard";
        $data["file_view"]="dash_page";
        echo Modules::run("template/public_view",$data);
    }
}

