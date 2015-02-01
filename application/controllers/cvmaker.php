<?php

class Cvmaker extends CI_Controller {

    public function __construct() {
        parent::__construct();
        session_start();
        $this->load->model('cvmaker_model');
        $this->load->model('cvmaker_model_fetch');
        
    }

    function index() {
        if (isset($_SESSION['email'])) {
            redirect(base_url('cvmaker/home_page'));
        } else {
            $_SESSION['id'] = rand(10000, 1000000);
            redirect(base_url('cvmaker/home_page'));
        }
    }

    function login() {
        if (isset($_SESSION['email'])) {
            redirect(base_url('cvmaker/home_page'));
        } else {
            $this->load->view('login');
        }
    }

    function login_submit() {
        $this->form_validation->set_rules('login_email', 'Email', 'trim|required|xss_clean|valid_email');
        $this->form_validation->set_rules('login_password', 'Password', 'trim|required|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $data = new stdClass();
            $data->success =FALSE;
            $data->errorMsg= "Recheck your Entries!!";
            echo validation_errors();
        } else {
            $email = $this->input->post('login_email');
            $password = md5($this->input->post("login_password"));
            $out = $this->cvmaker_model->check_users($email, $password);
            if ($out->num_rows == 1) {
                $row = $out->result();
                $_SESSION['email'] = $email;
                $_SESSION['id'] = $row[0]->id;
                $data = new stdClass();
                $data->success =TRUE;
                $data->errorMsg= "Login Successful!!";
                echo json_encode($data);
                //redirect(base_url('cvmaker/home_page'));
            } else {
                $data = new stdClass();
                $data->success =FALSE;
                $data->errorMsg= "Incorrect Email-Password Combination!!";
                echo json_encode($data);
                //redirect(base_url('cvmaker/login'));
            }
        }
    }

    function register_submit() {
        $this->form_validation->set_rules('register_email', 'Email', 'trim|required|xss_clean|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('register_password', 'Password', 'min_length[8]|max_length[20]|matches[register_passconf]|required');
        $this->form_validation->set_rules('register_passconf', 'Password Confirmation', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data = new stdClass();
            $data->success =FALSE;
            $data->errorMsg= "Recheck your Entries!!";
            echo validation_errors();
           // $this->load->view('login');
        } else {
            $email = $this->input->post('register_email');
            $password = md5($this->input->post('register_password'));
            $success = $this->cvmaker_model->insert_users($email, $password);
            if ($success == 1) {
               //$this->load->view('register_success');
                $data = new stdClass();
                $data->success =TRUE;
                $data->errorMsg= "Successfully Added";
                echo json_encode($data);
            } else {
              //  $this->load->view('login');
                $data = new stdClass();
                $data->success =FALSE;
                $data->errorMsg= "Oops Something Went Wrong!!";
                echo json_encode($data);
            }
            
        }
    }
    function register_success()
    {
        $this->load->view('register_success');
    }

    function home_page() {
        $this->load->view('home1');
    }

    function basic_information() {
        $this->load->view('basic_information');
    }

    function basic_information_submit() {
        $this->form_validation->set_rules('first_name', 'First name', 'trim|required');
        $this->form_validation->set_rules('middle_name', 'Middle name', 'trim');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('phone_no', 'Phone Number', 'required|trim|numeric');
        $this->form_validation->set_rules('date_of_birth', 'Date of Birth', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('basic_information');
        } else {
            $first_name = $this->input->post('first_name');
            $middle_name = $this->input->post('middle_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');
            $phone_no = $this->input->post('phone_no');
            $date_of_birth =$this->input->post('date_of_birth');
            //echo $date_of_birth;
            if($this->input->post('objective')!=NULL)
            $objective=$this->input->post('objective');
            else
            $objective=$this->input->post('objectiver');
                
            $user_id =$_SESSION['id'];
            //echo $user_id;
            $success = $this->cvmaker_model->insert_basic_information($user_id, $first_name, $middle_name, $last_name, $email, $phone_no, $date_of_birth,$objective);
            if ($success == 1) {
                redirect(base_url('cvmaker/qualification'));
            } else {
                $this->load->view('basic_information');
            }
        }
    }

    function qualification() {
        $this->load->view('qualification');
    }

    function qualification_submit() {

        $this->form_validation->set_rules('name_10', 'Class 10th Board name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('school_10', 'Class 10th School name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('year_of_passing_10', 'Year of passing class 10', 'trim|required|xss_clean');
        $this->form_validation->set_rules('performance_scale_10', 'Scale of measurement of class 10', 'trim|required|xss_clean');
        $this->form_validation->set_rules('percentage_10', 'Percentage/Grade Point', 'trim|required|xss_clean|less_than[100]');
        $this->form_validation->set_rules('name_12', 'Class 12th Board name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('school_12', 'Class 12th School name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('year_of_passing_12', 'Year of passing class 12', 'trim|required|xss_clean');
        $this->form_validation->set_rules('performance_scale_12', 'Scale of measurement of Class 12', 'trim|required|xss_clean');
        $this->form_validation->set_rules('percentage_12', 'Percentage/Grade Point', 'trim|required|xss_clean|less_than[100]');
        $this->form_validation->set_rules('graduation_institute', 'Graduation Institute name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('graduation_university', 'Graduation University name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('graduation_department', 'Name of the Department ', 'trim|required|xss_clean');
        $this->form_validation->set_rules('graduation_degree', 'Name of the degree', 'trim|required|xss_clean');
        $this->form_validation->set_rules('year_of_passing_graduation', 'Year Of passing ', 'trim|required|xss_clean');
        $this->form_validation->set_rules('performance_scale_graduation', 'Scale of measurement', 'trim|required|xss_clean');
        $this->form_validation->set_rules('percentage_graduation', 'Percentage/Grade Point ', 'trim|required|xss_clean|less_than[100]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('qualification');
        } else {
            $name_10 = $this->input->post('name_10');
            $school_10 = $this->input->post("school_10");
            $year_of_passing_10 = $this->input->post('year_of_passing_10');
            $performance_scale_10 = $this->input->post("performance_scale_10");
            $percentage_10 = $this->input->post("percentage_10");
            $name_12 = $this->input->post('name_12');
            $school_12 = $this->input->post("school_12");
            $year_of_passing_12 = $this->input->post('year_of_passing_12');
            $performance_scale_12 = $this->input->post("performance_scale_12");
            $percentage_12 = $this->input->post("percentage_12");
            $graduation_institute = $this->input->post('graduation_institute');
            $graduation_university = $this->input->post("graduation_university");
            $graduation_department = $this->input->post('graduation_department');
            $graduation_degree = $this->input->post("graduation_degree");
            $year_of_passing_graduation = $this->input->post('year_of_passing_graduation');
            $performance_scale_graduation = $this->input->post("performance_scale_graduation");
            $percentage_graduation = $this->input->post("percentage_graduation");
            $user_id = $_SESSION['id'];
            $success = $this->cvmaker_model->insert_qualification($user_id, $name_10, $school_10, $year_of_passing_10, $performance_scale_10, $percentage_10, $name_12, $school_12, $year_of_passing_12, $performance_scale_12, $percentage_12, $graduation_institute, $graduation_university, $graduation_department, $graduation_degree, $year_of_passing_graduation, $performance_scale_graduation, $percentage_graduation);
            if ($success == 1) {
                redirect(base_url('cvmaker/work_experience'));
            } elseif ($success == 0) {
                $this->load->view('qualification');
            }
        }
    }

    function work_experience() {
        $this->load->view('work_experience');
    }

    function work_experience_submit() {

        $this->form_validation->set_rules('project_name', 'Project name', 'xss_clean');
        $this->form_validation->set_rules('project_organisation', 'Project Oragnisation', 'xss_clean');
        $this->form_validation->set_rules('project_duration', 'Project duration', 'xss_clean');
        $this->form_validation->set_rules('project_place', 'Project place', 'xss_clean');
        $this->form_validation->set_rules('intern_name', 'Internship name', 'xss_clean');
        $this->form_validation->set_rules('intern_organisation', 'Organisation of Internship', 'xss_clean');
        $this->form_validation->set_rules('intern_duration', 'Duration of Internship', 'xss_clean');
        $this->form_validation->set_rules('intern_place', 'Internship Place', 'xss_clean');
        $this->form_validation->set_rules('work_position', 'Job Title', 'xss_clean');
        $this->form_validation->set_rules('work_organisation', 'Work Organisation', 'xss_clean');
        $this->form_validation->set_rules('work_duration', 'Work Duration', 'xss_clean');
        $this->form_validation->set_rules('work_place', 'Work Place', 'xss_clean');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('work_experience');
        } 
        else {
            if(count($this->input->post('project_name[]'))!=0)
            {
                $user_id = $_SESSION['id'];

                $count_projects = count($this->input->post('project_name'));
                for ($i = 0; $i < $count_projects; $i++) {
                    $project_name = $_POST['project_name'][$i];
                    $project_organisation = $_POST['project_organisation'][$i];
                    $project_duration = $_POST['project_duration'][$i];
                    $project_place = $_POST['project_place'][$i];
                    $project_details=$_POST['project_details'][$i];
                    if ($project_name != NULL) {
                    $this->cvmaker_model->insert_project_details($user_id, $project_name,$project_organisation, $project_place, $project_duration,$project_details);
                    }
                }
            }
             if(count($this->input->post('intern_name[]'))!=0)
             {
                 $user_id = $_SESSION['id'];
                $count_interns = count($this->input->post('intern_name'));
                for ($i = 0; $i < $count_interns; $i++) {
                    $intern_name = $_POST['intern_name'][$i];
                    $intern_organisation = $_POST['intern_organisation'][$i];
                    $intern_duration = $_POST['intern_duration'][$i];
                    $intern_place = $_POST['intern_place'][$i];
                    if ($intern_name != NULL) {
                        $success2=$this->cvmaker_model->insert_intern_details($user_id, $intern_name, $intern_organisation, $intern_place, $intern_duration);
                }
            }
             }  
             if(($this->input->post('cur_work_position'))!=NULL)
              {    
                  $user_id = $_SESSION['id'];
                  $cur_work_position=$this->input->post('cur_work_position');
                  $cur_name=$this->input->post('cur_work_name');
                  $cur_organisation=$this->input->post('cur_work_organisation');
                  $cur_place=$this->input->post('cur_work_place');
                  $cur_duration=$this->input->post('month')."/".$this->input->post('year');
                  $this->cvmaker_model->insert_work_details($user_id, 1, $cur_organisation, $cur_work_place, $cur_work_position, $cur_work_duration);
                $count_works = count($this->input->post('work_position'));
              }
               if(count($this->input->post('prior_work_position[]'))!=0)
               {    
                for ($i = 0; $i < $count_works; $i++) {
                    $work_position = $_POST['prior_work_position'][$i];
                    $status = $_POST['status'][$i];
                    $work_organisation = $_POST['prior_work_organisation'][$i]; 
                    $work_duration = $_POST['prior_work_duration'][$i];
                     $work_place = $_POST['prior_work_place'][$i];
                    $success3 = $this->cvmaker_model->insert_work_details($user_id,0, $work_organisation, $work_place, $work_position, $work_duration);
                }
                
                } 
              
               redirect(base_url('cvmaker/skills'));
        }
    }
        
    

    function skills() {
        $data['list'] = $this->cvmaker_model_fetch->fetch_skills_list();
        $this->load->view('skills',$data);
    }

    function skills_submit() {
            
        $data = $this->cvmaker_model_fetch->fetch_skills_list();
        $user_id = $_SESSION['id'];
        $count_skills = 0;
        $count_unlisted_skills = 0;
        $count_nontech = 0;
        $count_language = 0;
        $count_newlanguage = 0;
        if (is_array($this->input->post('skill')))
            $count_skills = count($this->input->post('skill'));
        if (is_array($this->input->post('unlisted_skill')))
            $count_unlisted_skills = count($this->input->post('unlisted_skill'));
        if (is_array($this->input->post('nontechnical')))
            $count_nontech = count($this->input->post('nontechnical'));
        if (is_array($this->input->post('language')))
            $count_language = count($this->input->post('language'));
        if (is_array($this->input->post('newlanguage')))
            $count_newlanguage = count($this->input->post('newlanguage'));
        
        for ($i = 0; $i < $count_skills; $i++) {
            foreach ($data as $row) {
            
                if ($row->category == 1 && $row->skills == $_POST['skill'][$i]) {
                    $value = $_POST['rating'][$i];
                    $this->cvmaker_model->insert_skills_rated($user_id, $row->id, $value);
                } elseif($row->category == 0)  {
                    $value = $this->input->post($row->id);
                    if ($value == $row->id)
                        $this->cvmaker_model->insert_skills_nonrated($user_id, $row->id);
                }
            }
        }
        for ($i = 0; $i < $count_language; $i++) {
            $value = $_POST['language'][$i];
            $this->cvmaker_model->insert_skills_nonrated($user_id, $value);
        }

        for ($i = 0; $i < $count_unlisted_skills; $i++) {
            $skill = $_POST['unlisted_skill'][$i];
            if ($skill != NULL) {
                $value = $_POST['unlisted_rating'][$i];
                $out = $this->cvmaker_model->insert_new_skill($skill, 1, 0);
                if ($out == 1) {
                    $skill_id = $this->cvmaker_model_fetch->fetch_skill_id('$skill');
                    $this->cvmaker_model->insert_skills_rated($user_id, $skill_id, $value);
                }
            }
        }
        for ($i = 0; $i < $count_newlanguage; $i++) {
            $skill = $_POST['newlanguage'][$i];
            if ($skill != NULL) {
                $out = $this->cvmaker_model->insert_new_skill($skill, 0, 0);
                if ($out == 1) {
                    $skill_id = $this->cvmaker_model_fetch->fetch_skill_id('$skill');
                    $this->cvmaker_model->insert_skills_nonrated($user_id, $skill_id);
                }
            }
        }
        for ($i = 0; $i < $count_nontech; $i++) {
            $skill = $_POST['nontechnical'][$i];
            if ($skill != NULL) {
                $out = $this->cvmaker_model->insert_new_skill($skill, 2, 0);
                if ($out == 1) {
                    $skill_id = $this->cvmaker_model_fetch->fetch_skill_id('$skill');
                    $this->cvmaker_model->insert_skills_nonrated($user_id, $skill_id);
                }
            }
        }
        redirect(base_url('cvmaker/interest'));
    }
    function interest() {

        $this->load->view('interests');
    }

    function interest_submit() {

        $this->form_validation->set_rules('interest', 'Interest', 'trim|xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('interests');
        } else {
             if(count($this->input->post('interest[]'))!=0)
             {$user_id = $_SESSION['id'];
             $count_interests = count($this->input->post('interest'));
                for ($i = 0; $i < $count_interests; $i++) {
                    $interests= $_POST['interest'][$i];
                    if ($interest != NULL) {
                    $out = $this->cvmaker_model->insert_interest($user_id, $interest);
                   
            }
                }
                redirect(base_url('cvmaker/achievements'));
            } 
             }
        }
    

    function achievements() {

        $this->load->view('achievements');
    }

    function achievement_submit() {

        $this->form_validation->set_rules('achievement', 'Achievement', 'xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('achievements');
        } else {
            if(count($this->input->post('achievements[]'))!=0)
            { for ($i = 0; $i < count($this->input->post('achievements[]')); $i++) {
                $user_id = $_SESSION['id'];
                $achievement = $_POST['achievement'][$i];
               
                if ($achievement != NULL) {
                     $out = $this->cvmaker_model->insert_achievements($user_id, $achievement);
                }
            } } 
        
                redirect(base_url('cvmaker/position_of_responsibility'));
        }
        
    }

    function position_of_responsibility() {

        $this->load->view('position_of_responsibility');
    }

    function position_of_responsibility_submit() {

        $this->form_validation->set_rules('position_of_responsibility', 'Position of Responsibility', 'xss_clean');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('position_of_responsibility[]');
        } else {
            if(count($this->input->post('postposition_of_responsibiltity[]'))!=0)
            { for ($i = 0; $i < count($this->input->post('position_of_responsibility')); $i++) {  
            $user_id = $_SESSION['id'];
            $position_of_responsibiltity = $_POST['position_of_responsibility'][$i];
             if ($position_of_responsibiltity != NULL) {
             $out = $this->cvmaker_model->insert_positions_of_responsibility($user_id, $position_of_responsibiltity);            }
           
                 
            }} 
                redirect(base_url('cvmaker/reference'));
             }  
        
        
    }  

    function reference() {

        $this->load->view('references');
        
    }

    function reference_submit() {
      
            $this->form_validation->set_rules('reference_by[$i]', 'Name', 'xss_clean');
            $this->form_validation->set_rules('contact[$i]', 'Contact', 'xss_clean|numeric');
            $this->form_validation->set_rules('email[$i]', 'Email Id', 'xss_clean|valid_email');
            $this->form_validation->set_rules('institute[$i]', 'Institute', 'xss_clean');
            $this->form_validation->set_rules('position[$i]', 'Position', 'xss_clean');
       
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('references');
        } 
        else 
        {
             $checked = $this->input->post('on_request');
            if((int) $checked == 1)
            {     $count = count($this->input->post('reference_by[]'));
                 $user_id =$_SESSION['id'];
                if($this->input->post('reference_by[]')==NULL)
                    
                {    
                    $out = $this->cvmaker_model->insert_reference($user_id,NULL,NULL,NULL,NULL,NULL,'1');
                }
                else 
                { 
             for ($i = 0; $i < $count; $i++) {  
                        $reference_by = $_POST['reference_by'][$i];
                    $contact = $_POST['contact'][$i];
                    $email = $_POST['email'][$i];
                    $institute = $_POST['institute'][$i];
                    $position = $_POST['position'][$i];
                    $on_request=$_POST['on_request'][$i];
                    if($reference_by!=NULL)
                    $out = $this->cvmaker_model->insert_reference($user_id, $reference_by, $email, $contact, $institute, $position,'1');   
                }}
            
            }
            else if($this->input->post('reference_by')!=NULL && (int) $checked == 1)
            {
                  for ($i = 0; $i < count($this->input->post('reference_by[]')); $i++) {  
                $user_id =$_SESSION['id'];
                    $reference_by = $_POST['reference_by'][$i];
                    $contact = $_POST['contact'][$i];
                    $email = $_POST['email'][$i];
                    $institute = $_POST['institute'][$i];
                    $position = $_POST['position'][$i];
                    $on_request=$_POST['on_request'][$i];
                    if($reference_by!=NULL)
                    $out = $this->cvmaker_model->insert_reference($user_id, $reference_by, $email, $contact, $institute, $position,'0');
                  }
                    
            }
            $this->cvmaker_model->insert_completed($user_id);
            
              redirect(base_url('cvmaker/template'));
       
    }
    }

    function logout() {
        if (isset($_SESSION))
            session_destroy();
        redirect(base_url('cvmaker/index'));
    }
    function template()
    {
        $this->load->view('template');
    }

    
    function template1() {
        require_once("/var/www/cvmaker/system/helpers/dompdf/dompdf_config.inc.php");
        $id = $_SESSION['id'];
        $basic_information = $this->cvmaker_model_fetch->fetch_basic_information($id);
        $qualification = $this->cvmaker_model_fetch->fetch_qualification($id);
        $project = $this->cvmaker_model_fetch->fetch_project_details($id);
        $intern = $this->cvmaker_model_fetch->fetch_intern_details($id);
        $work = $this->cvmaker_model_fetch->fetch_work_details($id);
        $position_of_responsibility= $this->cvmaker_model_fetch->fetch_position_of_responsibility($id);
        $achievement= $this->cvmaker_model_fetch->fetch_achievements($id);
        $interest= $this->cvmaker_model_fetch->fetch_interest($id);
        $references= $this->cvmaker_model_fetch->fetch_references($id);
        $skills_technical=$this->cvmaker_model_fetch->fetch_skills_rated($id);
        $skills_nontechnical=$this->cvmaker_model_fetch->fetch_skills_nonrated($id);
        $data = array('basic_information' => $basic_information,
            'qualification' => $qualification,
            'project' => $project,
            'intern' => $intern,
            'work' => $work,
            'technical_skills' =>$skills_technical,
            'nontechnical_skills' =>$skills_nontechnical,
            'position_of_responsibility' => $position_of_responsibility,
            'achievement' => $achievement,
            'interest' => $interest,
            'references' => $references);
             $this->load->view('template1',$data,false);
            $html = $this->load->view('template1',$data,true); 
            $dompdf = new DOMPDF(); 
            $dompdf->load_html($html); 
            $dompdf->render(); 
            $dompdf->stream("cv.pdf");
        
    }
     
    function template2() {
        require_once("/var/www/cvmaker/system/helpers/dompdf/dompdf_config.inc.php");
        $id = $_SESSION['id'];
        $basic_information = $this->cvmaker_model_fetch->fetch_basic_information($id);
        $qualification = $this->cvmaker_model_fetch->fetch_qualification($id);
        $project = $this->cvmaker_model_fetch->fetch_project_details($id);
        $intern = $this->cvmaker_model_fetch->fetch_intern_details($id);
        $work = $this->cvmaker_model_fetch->fetch_work_details($id);
        $position_of_responsibility= $this->cvmaker_model_fetch->fetch_position_of_responsibility($id);
        $achievement= $this->cvmaker_model_fetch->fetch_achievements($id);
        $interest= $this->cvmaker_model_fetch->fetch_interest($id);
        $references= $this->cvmaker_model_fetch->fetch_references($id);
        $skills_technical=$this->cvmaker_model_fetch->fetch_skills_rated($id);
        $skills_nontechnical=$this->cvmaker_model_fetch->fetch_skills_nonrated($id);
        $data = array('basic_information' => $basic_information,
            'qualification' => $qualification,
            'project' => $project,
            'intern' => $intern,
            'work' => $work,
            'technical_skills' =>$skills_technical,
            'nontechnical_skills' =>$skills_nontechnical,
            'position_of_responsibility' => $position_of_responsibility,
            'achievement' => $achievement,
            'interest' => $interest,
            'references' => $references);
             $this->load->view('template2',$data,false);
            $html = $this->load->view('template2',$data,true); 
            $dompdf = new DOMPDF(); 
            $dompdf->load_html($html); 
            $dompdf->render(); 
            $dompdf->stream("cv.pdf");
        
    }
}
