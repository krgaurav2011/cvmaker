<html>
    <body>
        
        <h1>Curriculum Vitae</h1> 
        
        <?php
        
        
        
        echo "<h3>Basic Information:</h3>";
        $basic->first_name();
        foreach ($basic->result() as $row){
            
            $basic_information_name= $row->first_name;
            $basic_information_middle_name= $row->middle_name;
            $basic_information_last_name= $row->last_name;
            $basic_information_email= $row->email;
            $basic_information_phone_number= $row->phone_number;
            $basic_information_dob= $row->dob;
            
            echo "<p>Name: $basic_information_name $basic_information_middle_name"
                    . " $basic_information_last_name</p>";
            echo "<p>Email: $basic_information_email</p>";
            echo "<p>Phone: $basic_information_phone_number</p>";
            echo "<p>Date of Birth: $basic_information_dob</p>";
            echo"<br><br>";
            
            
        }
        
        echo "<h3>Qualification  Details</h3>";
        foreach ($qualification->result() as $row){
                   
            $qualification_class_10_exam= $row->class_10_exam;
            $qualification_class_10_school= $row->class_10_school;
            $qualification_class_10_year= $row->class_10_year;
            $qualification_scale_10= $row->scale_10;
            $qualification_class_10_percentage= $row->class_10_percentage;
            $qualification_class_12_exam= $row->class_12_exam;
            $qualification_class_12_school= $row->class_12_school;
            $qualification_class_12_year= $row->class_12_year;
            $qualification_scale_12= $row->scale_12;
            $qualification_class_12_percentage= $row->class_12_percentage;
            $qualification_department= $row->department;
            $qualification_degree= $row->degree;
            $qualification_institute= $row->institute;
            $qualification_university= $row->university;
            $qualification_scale= $row->scale;
            $qualification_percentage= $row->percentage;
            $qualification_yop= $row->year_of_passing;
            
            echo "<li>Class 10 Details: </li>";
            echo "<p>Exam: $qualification_class_10_exam </p>";
            echo "<p>School: $qualification_class_10_school</p>";
            echo "<p>Marks: $qualification_class_10_percentage out of $qualification_scale_10 </p>";
            echo "<p>Year: $qualification_class_10_year";
            echo "<br>";
            
            echo "<li>Class 12 Details: </li>";
            echo "<p>Exam: $qualification_class_12_exam </p>";
            echo "<p>School: $qualification_class_12_school</p>";
            echo "<p>Marks: $qualification_class_12_percentage out of $qualification_scale_12 </p>";
            echo "<p>Year: $qualification_class_12_year";
            echo "<br>";
            
            echo "<li>College Details: </li>";
            echo "<p>Department: $qualification_department </p>";
            echo "<p>Degree: $qualification_degree</p>";
            echo "<p>Institute: $qualification_institute of University $qualification_university";
            echo "<p>Marks: $qualification_percentage out of $qualification_scale </p>";
            echo "<p>Year of passing: $qualification_yop";
            echo "<br>";
            
            
            
         }
        
        
            if($proj!=NULL)
            {
                echo"<h3>Project Details:</h3>";
                foreach ($proj->result() as $row){
            
                $project_name= $row->name;
                $project_organisation=$row->organisation;
                $project_place= $row->place;
                $project_duration= $row->duration;
                        
                
                
                echo "<p>Project Title: $project_name</p>";
                echo "<p>Project organisation: $project_organisation</p>";
                echo "<p>Project place: $project_place</p>";
                echo "<p>Project duration: $project_duration</p>";
                echo"<br><br>";
                
                }
            }
            
            if($intern!=NULL)
            {   
                echo"<h3>Intern Details:</h3>";
                foreach ($intern->result() as $row){
            
                $intern_name= $row->name;
                $intern_organisation= $row->organisation;
                $intern_place= $row->place;
                $intern_duration= $row->duration;
                        
                
                
                echo "<p>Intern Title: $intern_name</p>";
                echo "<p>Intern organisation: $intern_organisation</p>";
                echo "<p>Intern place: $intern_place</p>";
                echo "<p>intern duration: $intern_duration</p>";
                echo"<br><br>";
                
                }
            }
            
            if($work!=NULL){
                echo"<h3>Work Details:</h3>";
                foreach ($work->result() as $row){
            
                $work_name= $row->name;
                $work_organisation= $row->organisation;
                $work_place= $row->place;
                $work_duration= $row->duration;
                $work_position=$row->position;            
                
                
                echo "<p>work Title: $work_name</p>";
                echo "<p>work organisation: $work_organisation</p>";
                echo "<p>Work place: $work_place</p>";
                echo "<p>Work duration: $work_duration</p>";
                echo "<p>Work position: $work_position</p>";
                echo"<br><br>";
                
                }
            }
            
            if($int!=NULL)
            {
                echo"<h3>Interests:</h3>";
                foreach ($int->result() as $row){
            
                $intr= $row->interests;
                echo "<li> $intr </li>";
                
                }
            }
                
            if($ach!=NULL)
            {
                echo"<h3>Achievements:</h3>";
                foreach ($ach->result() as $row){
            
                $achieve= $row->achievements;
                echo "<li> $achieve </li>";
                echo "<br>";
                
                }
            }
            
            if($pos!=NULL)
            {
                echo"<h3>Positions of responsibility:</h3>";
                foreach ($pos->result() as $row){
            
                $p= $row->position;
                echo "<li> $p </li>";
                echo "<br>";
                
                }
            }
            
            if($ref!=NULL){
                echo"<h3>Refernce Details:</h3>";
                foreach ($ref->result() as $row){
            
                $reference_name= $row->reference_by;
                $reference_email= $row->email;
                $reference_contact= $row->contact;
                $reference_institute= $row->institute;
                $reference_position= $row->position;
                
                echo "<p>Name: $reference_name</p>";
                echo "<p>Email Id: $reference_email</p>";
                echo "<p>Contact: $reference_contact</p>";
                echo "<p>Institute: $reference_institute</p>";
                echo "<p>Position: $reference_position</p>";
                echo"<br><br>";
                
                }
            }
            
        ?>
        
            
    </body>
</html>    