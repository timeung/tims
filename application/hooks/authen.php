<?php
    class Authen {
        private  $ci;
        public function __construct() {
            $this->ci=& get_instance();
        }
        
        
        
        public function check_login(){
//            $controller=  $this->ci->router->class;
//            $method=  $this->ci->router->method;
//            if($controller=="home" || $controller=="school" || $controller=="budget" || $controller=="report"||$controller=="utility"|| $controller=="stat"){
//                if($this->ci->session->userdata("username")==NULL||$this->ci->session->userdata("role")==NULL)
//                    redirect(base_url("login"),"refresh");
//
//                } 
//                else if($controller=="upload" ||$controller=="manage" ){
//                if($this->ci->session->userdata("adminpage")==NULL)
//                redirect(base_url());
//            }
        }
    }
?>
