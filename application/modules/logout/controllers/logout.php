<?php
class Logout extends MX_Controller{

    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $this->session->sess_destroy();
        redirect(base_url(),"refresh");
        exit;
    }

}

?>
