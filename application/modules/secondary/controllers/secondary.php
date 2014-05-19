<?php
    class Secondary extends MX_Controller{
            
        
        function index(){
            $data["modules"]="secondary";
            $data["file_view"]="secondary_view";
            
            echo Modules::run("template/public_view",$data);
        }
    }
