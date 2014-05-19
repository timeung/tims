<?php
    class Mdl_book extends CI_Model{
        public function __construct() {
            parent::__construct();
        }
        // update book
        public function _update_book($p1,$id){
            $data=array("p1"=>$p1);
            $this->db->where("bookcode",$id);
            $this->db->update("tbprimary",$data);
        }
        
        public function get_book_from_id($id){
            
           return $this->db->get_where("tbprimary",array("id"=>$id));
        }
        
        public function _update_book_record($data,$id,$table){
            $this->db->where("bookcode",$id);
            $this->db->update($table,$data);
        }
        
        public function sum_book_CD(){
            $sql=$this->db->query("SELECT SUM(p1) as p1 FROM tbprimary WHERE bookcode IN (12,17)");
            foreach($sql->result() as $row){
                return $row->p1;
            }
        }
//        Primary school
        public function _update_class($c1,$c2,$c3,$c4,$c5,$id){
            $data=array("c1"=>$c1,"c2"=>$c2,"c3"=>$c3,"c4"=>$c4,"c5"=>$c5);
            $this->db->where("id",$id);
            $this->db->update("tbschool",$data);
        }
        public function _update_teacher($c1,$c2,$c3,$c4,$c5,$id) {
            $data=array("t1"=>$c1,"t2"=>$c2,"t3"=>$c3,"t4"=>$c4,"t5"=>$c5);
            $this->db->where("id",$id);
            $this->db->update("tbschool",$data);
        }
        public function _update_std($c1,$c2,$c3,$c4,$c5,$id) {
            $data=array("s1"=>$c1,"s2"=>$c2,"s3"=>$c3,"s4"=>$c4,"s5"=>$c5);
            $this->db->where("id",$id);
            $this->db->update("tbschool",$data);
        }
        public function _update_stdss($c1,$c2,$c3,$c4,$c5,$id) {
            $data=array("ss1"=>$c1,"ss2"=>$c2,"ss3"=>$c3,"ss4"=>$c4,"ss5"=>$c5);
            $this->db->where("id",$id);
            $this->db->update("tbschool",$data);
        }        
        
        public function get_book(){
            $this->db->limit(20,0);
            return $this->db->get("tbprimary");
        }
        
        public function get_lastrecord_book(){
            $this->db->limit(14,20);
            return $this->db->get("tbprimary");
        }
        public function get_sum_book(){
            $this->db->limit(7,34);
            return $this->db->get("tbprimary");
        }
//        End primary school
        public function show_book($p,$d){
//            $this->db->limit(10);
//            $sql=$this->db->get($table);
            $sql=$this->db->query("SELECT 
                tbschool.id,
                tbschool.schoolname, 
	tbschool.schoolcode, 
	tbprovince.provincename, 
	tbdistrict.districtname, 
	tbschool.villagename,
	tbschoollevel.schoollevel, 
	tbschoolarea.schoolarea, 
	tbschool.totalstudent, 
	tbschooltype.schooltype
                FROM tbschool INNER JOIN tbprovince ON tbschool.provincecode = tbprovince.provincecode
	 INNER JOIN tbdistrict ON tbschool.districtcode = tbdistrict.districtcode
	 
	 INNER JOIN tbschoollevel ON tbschool.schoollevel = tbschoollevel.id
	 INNER JOIN tbschooltype ON tbschool.schooltype = tbschooltype.id 
	 INNER JOIN tbschoolarea ON tbschool.schoolarea = tbschoolarea.id
	AND tbprovince.provincecode = tbdistrict.provincecode  WHERE tbschool.provincecode=$p AND tbschool.districtcode=$d ");
            return $sql; 
        }
        
        public function school_detail($schoolcode){
            $sql=$this->db->query("SELECT tbschool.totalstudent, 
                                                                            tbschool.schoolcode, 
                                                                            tbschool.schoolname, 
                                                                            tbschool.schoolfiscalyear, 
                                                                            tbschool.districtcode, 
                                                                            tbschool.provincecode, 
                                                                            tbschool.villagename, 
                                                                            tbprovince.provincename, 
                                                                            tbdistrict.districtname,
                                                                            tbschool.schooldirectorphone,
                                                                            tbschool.schooldistance,
                                                                            tbschool.schooldirectorname,
                                                                            tbschool.id,
                                                                            tbschool.c1, 
                                                                            tbschool.c2, 
                                                                          tbschool.c3, 
                                                                          tbschool.c4, 
                                                                          tbschool.c5, 
                                                                          tbschool.c6, 
                                                                          tbschool.c7, 
                                                                          tbschool.t1, 
                                                                          tbschool.t2, 
                                                                          tbschool.t3, 
                                                                          tbschool.t4, 
                                                                          tbschool.t5, 
                                                                          tbschool.t6, 
                                                                          tbschool.t7, 
                                                                          tbschool.s1, 
                                                                          tbschool.s2, 
                                                                          tbschool.s3, 
                                                                          tbschool.s4, 
                                                                          tbschool.s5, 
                                                                          tbschool.s6, 
                                                                          tbschool.s7, 
                                                                          tbschool.ss1, 
                                                                          tbschool.ss2, 
                                                                          tbschool.ss3, 
                                                                          tbschool.ss4, 
                                                                          tbschool.ss5, 
                                                                          tbschool.ss6, 
                                                                          tbschool.ss7
                                                                            FROM tbprovince INNER JOIN tbschool ON tbprovince.provincecode = tbschool.provincecode
                                                                            INNER JOIN tbdistrict ON tbdistrict.districtcode = tbschool.districtcode AND tbprovince.provincecode = tbdistrict.provincecode
                                                                            WHERE tbschool.schoolcode=$schoolcode");
            return $sql;
        }
        
        
        public function get_table($table){
            return $this->db->get($table);
        }
        public function get_district($pid){
            return $this->db->query("SELECT * FROM tbdistrict WHERE provincecode = $pid");
        }
}
