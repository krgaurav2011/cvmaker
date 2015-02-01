<?php

class cvmaker_model_fetch extends CI_Model {

    function fetch_basic_information($user_id) {

        $sql = "select * from basic_information where user_id=$user_id";
        $out = $this->db->query($sql);
        return $out->result();
    }

    function fetch_qualification($user_id) {

        $sql = "select * from qualification where user_id=$user_id";
        $out = $this->db->query($sql);
        return $out->result();
    }

    function fetch_project_details($user_id) {

        $sql = "select * from projects where user_id=$user_id";
        $out = $this->db->query($sql);
        return $out->result();
    }

    function fetch_intern_details($user_id) {

        $sql = "select * from internships where user_id=$user_id";
        $out = $this->db->query($sql);
        return $out->result();
    }

    function fetch_work_details($user_id) {

        $sql = "select * from work_experience where user_id=$user_id";
        $out = $this->db->query($sql);
        return $out;
    }
 	function fetch_skill_id(){
        $sql = "select * from skills_list";
        $query = $this->db->query($sql);
        $row = $query->result();
        $i=$query->num_rows();
        return $row[$i-1]->id;
        
   }
    function fetch_skill_name($id){
        $sql = "select * from skills_list where id=$id";
        $query = $this->db->query($sql);
        $row = $query->result();
        return $row;
        
    }
 function fetch_skills_list() {
       // $data = array();
        $sql = "select * from skills_list";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function fetch_skills_rated($id) {
       // $data = array();
        $sql = "select * from user_skills_rated where user_id=$id";
        $query = $this->db->query($sql);
        $tech_skills;$i=0;
        foreach($query->result() as $row)
        {
           $result=$this->fetch_skill_name($row->skill_id);
                   $tech_skills[$i++]=$result;
        }
        return $tech_skills;
    }
    function fetch_skills_nonrated($id)
    {
        $sql = "select * from user_skills_nonrated where user_id=$id";
        $query = $this->db->query($sql);
        $tech_skills;$i=0;
        foreach($query->result() as $row)
        {
           $result=$this->fetch_skill_name($row->skill_id);
                   $nontech_skills[$i++]=$result;
        }
        return $nontech_skills;
        
    }
    

    function fetch_achievements($user_id) {

        $sql = "select * from achievement where user_id=$user_id";
        $out = $this->db->query($sql);
        return $out;
    }

    function fetch_interest($user_id) {

        $sql = "select * from interest where user_id=$user_id";
        $out = $this->db->query($sql);
        return $out;
    }

    function fetch_position_of_responsibility($user_id) {

        $sql = "select * from position_of_responsibility where user_id=$user_id";
        $out = $this->db->query($sql);
        return $out;
    }

    function fetch_references($user_id) {

        $sql = "select * from reference where user_id=$user_id";
        $out = $this->db->query($sql);
        return $out;
    }
    
    function complete_cv($id) {
        
        $sql="select completed from users where id='$id'";
        $out=$this->db->query($sql);
        foreach ($out->result() as $r)
        {
            if($r->completed!=1)
                return 0;
            else
                return 1;
                
        }
        
    }

}
