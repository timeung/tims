<?php
    class Book extends MX_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model("mdl_book");
        }
        
        public function index(){
           $data["modules"]="book";
           $data["file_view"]="book_choose";
           $data["page_header"]="ເລືອກໂຮງຮຽນ";
           echo Modules::run("template/admin_panel",$data);
        }
        
        public function pre_school(){
           $data["school"]=$this->mdl_book->show_book("tbschool"); 
           $data["i"]=""; 
           $data["modules"]="book";
           $data["file_view"]="book_pre_school";
           $data["page_header"]="ໂຮງຮຽນອະນຸບານ";
           echo Modules::run("template/admin_panel",$data);
        }
        
        public function form(){
           $data["i"]=0; 
           $data["get_book"]=$this->mdl_book->get_book();
           $data["get_book_last"]=$this->mdl_book->get_lastrecord_book();
           $data["get_sum_book"]=$this->mdl_book->get_sum_book();
           $schoolocde=$this->uri->segment(3); 
           $data["schooldetail"]=$this->mdl_book->school_detail($schoolocde); 
           $data["modules"]="book";
           $data["file_view"]="book_pre_school_form";
           $data["page_header"]="ແບບຟອມເກັບກຳສະຖິຕິປື້ມໂຮງຮຽນປະຖົມ";
           echo Modules::run("template/admin_panel",$data);
        }
        
        public function form_edit_book(){
           $id= $this->uri->segment(3);
           $data["book"]=$this->mdl_book->get_book_from_id($id);
           $data["modules"]="book";
           $data["file_view"]="book_input_form";
           $data["page_header"]="ແບບຟອມເກັບກຳສະຖິຕິປື້ມໂຮງຮຽນປະຖົມ";
           echo Modules::run("template/admin_panel",$data);
        }
        
        public function save($id,$schoolcode){
           $p1= $this->input->post("p1");
           $p2= $this->input->post("p2");
           $p3= $this->input->post("p3");
           $p4= $this->input->post("p4");
           $p5= $this->input->post("p5");
           
           $data=array(
               "p1"=>$p1,
               "p2"=>$p2,
               "p3"=>$p3,
               "p4"=>$p4,
               "p5"=>$p5
           );
           
           $this->mdl_book->_update_book_record($data,$id,"tbprimary");

           $sump1= $this->mdl_book->sum_book_CD();
           $datap1=array(
                   "p1"=>$sump1
                   );
           $this->mdl_book->_update_book_record($datap1,22,"tbprimary");
           redirect(base_url("book/form/$schoolcode"),"refresh");
        }
        
        public function primary(){
           $role=$this->session->userdata("role");
           if($role!="root"){
                $p=substr($role, 0,2);
                $d=substr($role, 2,2);
                $data["school"]=$this->mdl_book->show_book($p,$d); 
           }
           $pid=$this->uri->segment(3);
           $data["province"]=$this->mdl_book->get_table("tbprovince"); 
           $data["i"]=""; 
           $data["modules"]="book";
           $data["file_view"]="book_pre_school";
           $data["page_header"]="ໂຮງຮຽນປະຖົມ";
           echo Modules::run("template/admin_panel",$data);
        }
        
        public function secondary(){
           $data["school"]=$this->mdl_book->show_book("tbschool"); 
           $data["i"]=""; 
           $data["modules"]="book";
           $data["file_view"]="book_pre_school";
           $data["page_header"]="ໂຮງຮຽນມັດທະຍົມ";
           echo Modules::run("template/admin_panel",$data);
        }
        
        public function sum(){
            $c1=$this->input->post("c1");
            $c2=$this->input->post("c2");
            $c3=$this->input->post("c3");
            $c4=$this->input->post("c4");
            $c5=$this->input->post("c5");
            $id=$this->input->post("id");
            $data["result"]=$c1+$c2+$c3+$c4+$c5;
            $this->mdl_book->_update_class($c1,$c2,$c3,$c4,$c5,$id);
            $this->load->view("class_textbox",$data);
        }
        
        public function sum_teacher(){
            $c1=$this->input->post("c1");
            $c2=$this->input->post("c2");
            $c3=$this->input->post("c3");
            $c4=$this->input->post("c4");
            $c5=$this->input->post("c5");
            $id=$this->input->post("id");
            $data["result"]=$c1+$c2+$c3+$c4+$c5;
            $this->mdl_book->_update_teacher($c1,$c2,$c3,$c4,$c5,$id);
            $this->load->view("class_textbox",$data);
        }
        
        public function sum_std(){
            $c1=$this->input->post("c1");
            $c2=$this->input->post("c2");
            $c3=$this->input->post("c3");
            $c4=$this->input->post("c4");
            $c5=$this->input->post("c5");
            $id=$this->input->post("id");
            $data["result"]=$c1+$c2+$c3+$c4+$c5;
            $this->mdl_book->_update_std($c1,$c2,$c3,$c4,$c5,$id);
            $this->load->view("class_textbox",$data);
        }
        
        public function sum_stdss(){
            $c1=$this->input->post("c1");
            $c2=$this->input->post("c2");
            $c3=$this->input->post("c3");
            $c4=$this->input->post("c4");
            $c5=$this->input->post("c5");
            $id=$this->input->post("id");
            $data["result"]=$c1+$c2+$c3+$c4+$c5;
            $this->mdl_book->_update_stdss($c1,$c2,$c3,$c4,$c5,$id);
            $this->load->view("class_textbox",$data);
        }
        
        
        public function Update_book(){
         $p1=$this->input->post("p1"); 
         $p1c=$this->input->post("p1c"); 
         $p1d=$this->input->post("p1d"); 
         $id=$this->input->post("id");
         $this->mdl_book->_update_book($p1,$id);
         
         
         echo $p1c+$p1d;
        }
       
    }
