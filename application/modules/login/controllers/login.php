<?php
    class Login extends MX_Controller{
       function __construct() {
           parent::__construct();
       }
        
        function index(){
            $data["error"]="";
            $this->load->view("login_page",$data);
        }
        
        function submit(){
             $data["error"]="";
            $this->load->library('form_validation');
    		
            
            $username=$this->input->post("username");
            $password=$this->input->post("password");
            $userhomepage=$this->input->post("userhomepage");
            $passwordhomepage=$this->input->post("passwordhomepage");
            
            if($username&&$password){
                $this->form_validation->set_rules('username', 'username', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');            
                if($this->form_validation->run($this)==FALSE){
                    $this->load->view("login_page",$data);
                } else{
                    if($this->_check_is_Admin($this->input->post("username"),$this->input->post("password"))==TRUE){
                        $this->session->set_userdata(array("username"=>$this->input->post("username")));
                        //$this->m
                        $this->session->set_userdata(array("role"=>$this->_get_role($this->input->post("username")))); 
                         
//                       exit;
                        redirect ("manage","refresh");
                    }else{
    //                    $this->form_validation->set_message("username","Username is inccorect");
                        $data["error"]="Inccorect Username or Password";
                        $this->load->view("login_page",$data);
                    }
                }
            } else if($userhomepage&&$passwordhomepage){
                $this->form_validation->set_rules('userhomepage', 'username', 'required');
                $this->form_validation->set_rules('passwordhomepage', 'username', 'required');
                if($this->form_validation->run($this)==FALSE){
                    echo 1;
                    redirect(base_url(),"refresh");
                } else{
                    if($this->_check_is_Admin($this->input->post("userhomepage"),$this->input->post("passwordhomepage"))==TRUE){
                        $dbrole=$this->_get_role($this->input->post("userhomepage"));
                        if($dbrole=="root"){
                            $this->session->set_userdata(array("adminpage"=>$this->input->post("userhomepage")));
                            redirect (base_url(),"refresh");    
                        } else{
                            redirect (base_url(),"refresh");
                        }
                        
                    }else{
    //                    $this->form_validation->set_message("username","Username is inccorect");
                        $data["error"]="Inccorect Username or Password";
                        redirect (base_url(),"refresh");
                    }
                }
            } else
                     redirect(base_url(),"refresh");
        
     }
        
        
        function _check_is_Admin($username,$password){
            $this->load->model("mdl_login");
            $query=  $this->mdl_login->Check_username_password($username,$password);
           if($query==TRUE)
               return TRUE;
           else
               return FALSE;
        }
        function _get_role($username){
            $this->load->model("mdl_login");
            $query=  $this->mdl_login->get_role($username);
            return $query->row()->role;
        }

    }
?>
