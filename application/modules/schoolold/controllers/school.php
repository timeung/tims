<?php
class School extends MX_Controller{

    function __construct() {
       parent::__construct();
       $this->load->model("mdl_school");
    }
    
    function index(){
//                $data=$this->get_data_from_post();

        $data=$this->input();
        echo Modules::run("template/admin_panel",$data);

    }
    function input(){
        $data["fiscalyear"]=  $this->mdl_school->get_dropdown("tbschoolfiscalyear");
        $data['province']=  $this->mdl_school->get_dropdown("tbprovince");
        $data["tbschoollevel"]=  $this->mdl_school->get_dropdown("tbschoollevel");
        $data["tbschooltype"]=  $this->mdl_school->get_dropdown("tbschooltype");
        $data["tbschoolarea"]=  $this->mdl_school->get_dropdown("tbschoolarea");
        $data["tbschoollocation"]=  $this->mdl_school->get_dropdown("tbschoollocation");
        $data["tbschoolmanage"]=  $this->mdl_school->get_dropdown("tbschoolmanage");
        $data["tbsystem"]=  $this->mdl_school->get_dropdown("tbsystem");
        $data["tblogic"]=  $this->mdl_school->get_dropdown("tblogic");
        $data["tbschoolvoucher"]=  $this->mdl_school->get_dropdown("tbschoolvoucher");
        $data["tbschooldonor"]=  $this->mdl_school->get_dropdown("tbschooldonor");
        $data["title"]="ແບບຟອມສັງລວມຂໍ້ມູນດ້ານງົບປະມານ - ລາຍຈ່າຍ";
        $data["modules"]="school";
        $data["file_view"]="school_view";
        $data["message"]="";
        return $data;
    }
    
    function showDistirct(){
       $provincecode= $this->input->post("provincecode"); 
       $data["district"]=  $this->mdl_school->get_district($provincecode); 
        $this->load->view("dropdownlist",$data);
    }
    
    function edit_district(){
        echo $this->input->post("editprince");
    }
            function showVillage(){
        $province=$this->input->post("p");
        $district= $this->input->post("d");
        $data["village"]=  $this->mdl_school->get_village($province,$district);
        $this->load->view("dropdown_village",$data);
    }
    
    function submit(){
        if($this->input->post("submit")){
            $schoolid=$this->input->post("schoolID");
            $data= array(
                "schoolfiscalyear"=>$this->input->post("schoolfiscalyear"),
                "schoolname"=>$this->input->post("schoolname"),
                "schoolcode"=>trim($this->input->post("schoolcode")),
                "provincecode"=>$this->input->post("province"),
                "districtcode"=>$this->input->post("district"),
                "villagename"=>$this->input->post("village"),
                "schoollevel"=>$this->input->post("schoollevel"),
                "schooltype"=>$this->input->post("schooltype"),
                "schoolarea"=>$this->input->post("schoolarea"),
                "schoollocation"=>$this->input->post("schoollocation"),
                "schooldistance"=>$this->input->post("schooldistance"),
                "school_des"=>$this->input->post("school_des"),
                "schooldirectorname"=>$this->input->post("schooldirectorname"),
                "schoolmanage"=>$this->input->post("schoolmanage"),
                "schooldirectorphone"=>$this->input->post("schooldirectorphone"),
                "schooldirectorserviceyear"=>$this->input->post("schooldirectorserviceyear"),
                "schooldirectorlevel"=>$this->input->post("schooldirectorlevel"),
                "schooldirectortraining"=>$this->input->post("schooldirectortraining"),
                "schooldirectorplan"=>$this->input->post("schooldirectorplan"),
                "schoolvoucher"=>$this->input->post("schoolvoucher"),
                "totalteacher"=>$this->input->post("totalteacher"),
                "totalteacherwomen"=>$this->input->post("totalteacherwomen"),
                "totalteachergov"=>$this->input->post("totalteachergov"),
                "totalteachergovwomen"=>$this->input->post("totalteachergovwomen"),
                "totalteachernogov"=>$this->input->post("totalteachernogov"),
                "totalteachernogovwomen"=>$this->input->post("totalteachernogovwomen"),
                "totalstudent"=>$this->input->post("totalstudent"),
                "totalfemale"=>$this->input->post("totalfemale"),
                "schoolnotpassed"=>$this->input->post("schoolnotpassed"),
                "schoolnotpassedgirl"=>$this->input->post("schoolnotpassedgirl"),
                "schooldropout"=>$this->input->post("schooldropout"),
                "schooldropoutgirl"=>$this->input->post("schooldropoutgirl"),
                "schoolpercent"=>$this->input->post("schoolpercent"),
                "schooldonor"=>$this->input->post("schooldonor"),
                "other"=>  $this->input->post("other"),
                // add more fields
                "p0"=>$this->input->post("p0"),
                "p0f"=>$this->input->post("p0f"),
                "pp1"=>$this->input->post("pp1"),
                "pp1f"=>$this->input->post("pp1f"),
                "p0fy"=>$this->input->post("p0fy"),
                "p0ff"=>$this->input->post("p0ff"),
            );
            
            if(is_numeric($schoolid)){
                $this->mdl_school->_update($schoolid,$data);
                redirect($this->input->post("url"),"refresh");
                exit;
                
            } else{
                $this->mdl_school->_insert($data); 
           $data=$this->input();
           echo "<script>alert('Insert Complete');
                                    window.location=' ".  base_url()."school'</script>";
           //$data["message"]="<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert'>×</a> ".$this->input->post("schoolname")." has  Complete Insert.</div>";
            //echo Modules::run("template/admin_panel",$data);
           exit;
           }
        } else{
            redirect("school/input","refresh");
        }
    }

    
    function detail(){
        $data["title"]="ແກ້ໄຂ";
        $data["modules"]="school";
        $data["file_view"]="detail_view";
        echo Modules::run("template/admin_panel",$data);
        
    }
    
    function search(){
        $value=$this->input->post("value");
       if(is_numeric($value)){
           $query=$this->mdl_school->getrecord($value);
           if($query->num_rows()>0){
                        $data["i"]=0;
                        $data["record"]=$this->mdl_school->getrecord($value);
                        $this->load->view("detail",$data);
           } else
           echo "No record";    
           
       } else
           echo "<p class='text-error'>ກະລຸນາພິມຕົວເລກ</p>";
    }
    
    
    
    function edit(){
         $id=  $this->uri->segment(3); 
        if(is_numeric($id)){
            $data=$this->get_data_from_db($id);
            $pcode=$this->uri->segment(4);
            $districtcode=  $this->uri->segment(5);
            if(!$districtcode)
                $districtcode=$data['districtcode'];
            if(!$pcode)
                $pcode=$data['provincecode'];
            
        $data["modules"]="school";
        $data["file_view"]="edit_view";
        $data["message"]="";
        $data["title"]="ແກ້ໄຂ";
        $data["pcode"]=$pcode;  
        $data["villageid"]=$this->mdl_school->get_village($pcode,$districtcode);
        $data["dropdowndistrict"]=  $this->mdl_school->get_district($pcode);
        $data["fiscalyear"]=  $this->mdl_school->get_dropdown("tbschoolfiscalyear");
        $data['province']=  $this->mdl_school->get_dropdown("tbprovince");
        $data['district']=  $this->mdl_school->get_dropdown("tbdistrict");
        $data["village"]=$this->mdl_school->get_dropdown("tbvillage");
        $data["tbschoollevel"]=  $this->mdl_school->get_dropdown("tbschoollevel");
        $data["tbschooltype"]=  $this->mdl_school->get_dropdown("tbschooltype");
        $data["tbschoolarea"]=  $this->mdl_school->get_dropdown("tbschoolarea");
        $data["tbschoollocation"]=  $this->mdl_school->get_dropdown("tbschoollocation");
        $data["tbschoolmanage"]=  $this->mdl_school->get_dropdown("tbschoolmanage");
        $data["tbsystem"]=  $this->mdl_school->get_dropdown("tbsystem");
        $data["tblogic"]=  $this->mdl_school->get_dropdown("tblogic");
        $data["tbschoolvoucher"]=  $this->mdl_school->get_dropdown("tbschoolvoucher");
        $data["tbschooldonor"]=  $this->mdl_school->get_dropdown("tbschooldonor");
        echo Modules::run("template/admin_panel",$data);
        } else
     redirect ("home","refresh");
    }
    
    
    function get_data_from_post(){
         $data['schoolname']=$this->input->post("schoolname",TRUE);
        $data["schoolcode"]=$this->input->post("schoolcode",TRUE);
    }
    
    function get_data_from_db($id){
        $query=$this->mdl_school->get_where($id);
        foreach($query->result() as $row){
            $data["schoolfiscalyear"]=$row->schoolfiscalyear;
            $data['schoolname']=$row->schoolname;
            $data["schoolcode"]=trim($row->schoolcode);
            $data["provincecode"]=$row->provincecode;
            $data["districtcode"]=$row->districtcode;
            $data["villagecode"]=$row->villagename;
            $data["schoollevel"]=$row->schoollevel;
            $data["schooltype"]=$row->schooltype;
            $data["schoolarea"]=$row->schoolarea;
            $data["schoollocation"]=$row->schoollocation;
            $data["schooldistance"]=$row->schooldistance;
            $data["school_des"]=$row->school_des;
            $data["schooldirectorname"]=$row->schooldirectorname;
            $data["schoolmanage"]=$row->schoolmanage;
            $data["schooldirectorphone"]=$row->schooldirectorphone;
            $data["schooldirectorserviceyear"]=$row->schooldirectorserviceyear;
            $data["schooldirectorlevel"]=$row->schooldirectorlevel;
            $data["schooldirectortraining"]=$row->schooldirectortraining;
            $data["schooldirectorplan"]=$row->schooldirectorplan;
            $data["schoolvoucher"]=$row->schoolvoucher;
            $data["totalteacher"]=$row->totalteacher;
            $data["totalteacherwomen"]=$row->totalteacherwomen;
            $data["totalteachergov"]=$row->totalteachergov;
            $data["totalteachernogov"]=$row->totalteachernogov;
            $data["totalteachergovwomen"]=$row->totalteachergovwomen;   
            $data["totalstudent"]=$row->totalstudent;
            $data["totalteachernogovwomen"]=$row->totalteachernogovwomen;
            $data["totalfemale"]=$row->totalfemale;
            $data["schoolnotpassed"]=$row->schoolnotpassed;
            $data["schoolnotpassedgirl"]=$row->schoolnotpassedgirl;
            $data["schooldropout"]=$row->schooldropout;
            $data["schooldropoutgirl"]=$row->schooldropoutgirl;
            $data["schoolpercent"]=$row->schoolpercent;
            $data["schooldonor"]=$row->schooldonor;
            $data["other"]=$row->other;
            $data["p0"]=$row->p0;
            $data["p0f"]=$row->p0f;
            $data["pp1"]=$row->pp1;
            $data["pp1f"]=$row->pp1f;
            $data["p0fy"]=$row->p0fy;
            $data["p0ff"]=$row->p0ff;
        }
        return $data;
    }
}

?>
