<?php
    class Primary extends MX_Controller{
        
        
        function index(){
            $data["modules"]="primary";
            $data["file_view"]="primary_view";
            
            echo Modules::run("template/public_view",$data);
        }
    }
