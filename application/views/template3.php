<html>
    <head>
        <title><?php
            echo $basic_information[0]->first_name;
            if ($basic_information[0]->middle_name != NULL)
                echo " " . $basic_information[0]->middle_name;
            if ($basic_information[0]->last_name != NULL)
                echo " " . $basic_information[0]->last_name;
            ?>
        </title>
        <style rel="text/css">
            body
            {
                display:block;
               clear:both;
            }
       .section
       {
           overflow:hidden;
       }
       .info
       {   float:right;
           width:65%;
           
          
       }
       h2
       { float:left;
           margin-top: 0px;
           width:30%;
       }

        </style>
    </head>
    <body>
        <div >
            <h1> <?php
                echo strtoupper($basic_information[0]->first_name);
                if ($basic_information[0]->middle_name != NULL)
                    echo " " . strtoupper($basic_information[0]->middle_name);
                if ($basic_information[0]->last_name != NULL)
                    echo " " . strtoupper($basic_information[0]->last_name);
                ?> </h1>
        </div>
      
        <div id="contact">
            Email : <?php echo $basic_information[0]->email; ?><br>
            Phone Number : <?php echo $basic_information[0]->phone_number; ?>
        </div>
          <hr>
        <div>
            <div class="section">
            <h2>CAREER OBJECTIVE :</h2>
            
           <div class="info" >
               <?php echo $basic_information[0]->objective;?>
            </div>
        </div>
        </div>
            <div class="section">
                <h2>ACADEMIC QUALIFICATIONS: </h2>
               <div class="info">
                    <table>
                        <tr>
                            <th>Exam</th>
                            <th>Year</th>
                            <th>Institute</th>
                            <th>University</th>
                            <th>Percentage/Grade Point</th>
                        </tr>
                        <tr>
                            <td><?php echo $qualification[0]->class_10_exam; ?></td>
                            <td><?php echo $qualification[0]->class_10_year; ?></td>
                            <td><?php echo $qualification[0]->class_10_school; ?></td>
                            <td>NA</td>
                            <td><?php
                                echo $qualification[0]->class_10_percentage;
                                if ($qualification[0]->scale_10 == 4)
                                    echo " Out of 4";
                                elseif ($qualification[0]->scale_10 == 10)
                                    echo " Out of 10";
                                else
                                    echo "%";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $qualification[0]->class_12_exam; ?></td>
                            <td><?php echo $qualification[0]->class_12_year; ?></td>
                            <td><?php echo $qualification[0]->class_12_school; ?></td>
                            <td>NA</td>
                            <td><?php
                                echo $qualification[0]->class_12_percentage;
                                if ($qualification[0]->scale_12 == 4)
                                    echo " Out of 4";
                                elseif ($qualification[0]->scale_12 == 10)
                                    echo " Out of 10";
                                else
                                    echo "%";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $qualification[0]->degree . "<br>" . $qualification[0]->department; ?></td>
                            <td><?php echo $qualification[0]->year_of_passing; ?></td>
                            <td><?php echo $qualification[0]->institute; ?></td>
                            <td><?php echo $qualification[0]->university; ?></td>
                            <td><?php
                                echo $qualification[0]->percentage;
                                if ($qualification[0]->scale == 4)
                                    echo " Out of 4";
                                elseif ($qualification[0]->scale == 10)
                                    echo " Out of 10";
                                else
                                    echo "%";
                                ?>
                            </td>    
                        </tr>


                    </table>
                </div>
            </div>
             <div class="section">
                <h2>PROJECTS AND INTERNSHIPS: </h2>
                <div class="info">
                    <ul>
                        <?php
                        foreach ($project as $row) { //replace with while
                            echo "<li>Worked on a project at <b> " . $row->organisation . "</b> in " . $row->place . " on the topic \"<b>" . $row->name . "</b>\"";
                            if ($row->details != NULL)
                                echo " which dealt with " . $row->details;
                            echo " for " . $row->duration . " </li>";
                        }


                        foreach ($intern as $row) {
                            echo "<li>Interned at " . $row->organisation . " in " . $row->place . " on the topic <b>" . $row->name . "</b> for " . $row->duration . " </li>";
                        }
                        ?>  
                    </ul>
                </div>
            </div>
             <div class="section">
<?php
if (count($work->result()) != 0) {
    ?>           
             
                    <h2>WORK EXPERIENCE:</h2>
                    <div class="info">
                        <ul>
                            <?php
                            foreach ($work->result() as $row) {
                                if ($row->status == 1) {
                                    echo "<li>Currently working as " . $row->position . " at " . $row->organisation . " in " . $row->place . "</b> from " . $row->duration . " </li>";
                                } else {
                                    echo "<li>Worked as " . $row->position . " at " . $row->organisation . " in <b>" . $row->place . "</b> for " . $row->duration . " </li>";
                                }
                            }
                            ?>
                        </ul>   
                    </div>
                </div>
                <?php
            }
           
            ?>
          <div class="section">
           <?php  if(count($technical_skills)!=0 || count($nontechnical_skills)!=0)
            { 
               
           }
?>
          
                    <h2> SKILLS:</h2>
                    <div class="info">
                        <ul>
                            
                              
            <?php 
                if(count($technical_skills)!=0)
                {      echo "Technical Skills<br>";
                        echo "<ul>";  
                  foreach($technical_skills as$row)
                  {
                   
                   echo "<li>".$row[0]->skills."</li>";
                    }
                     echo "</ul>";   
                }
              if(count($nontechnical_skills)!=0)
              {  echo "Non-Technical Skills<br>";
                  
                    echo "<ul>";
                    foreach($nontechnical_skills as $row)
                    {
                    echo "<li>".$row[0]->skills."</li>";
                    }
                    echo "</ul>";
                    
              }
              ?>            </div>
                            </ul>
                    </div>
          <div class="section">
                <?php if (count($position_of_responsibility->result()) != 0)  {
                ?>  
                    <h2>POSITIONS OF RESPONSIBILITY: </h2>
                    <div class="info">
                        <ul>
    <?php 
    foreach ($position_of_responsibility->result() as $row) {
        echo "<li>" . $row->position . "</li>";
    }
    ?>
                        </ul>    
                    </div>
                </div>
    <?php
                } ?>
                 <div class="section">
 <?php if (count($interest->result()) != 0){
    ?>    
                
                    <h2>INTERESTS AND HOBBIES: </h2>
                    <div class="info">
                        <ul>
                <?php
                foreach ($interest->result() as $row) {
                    echo "<li>" . $row->interests . "</li>";
                }
                ?>
                        </ul>    
                    </div>
                </div>
                        <div id=section>    <?php
                        }

                        if (count($achievement->result())!=0) {
                            ?>    
                
                    <h2>ACHIEVEMENTS :</h2>
                    <div class="info">
                        <ul>
                <?php
                foreach ($achievement->result() as $row) {
                    echo "<li>" . $row->achievements . "</li>";
                }
                ?>
                        </ul>    
                    </div>
                </div>
          <div class="section">          <?php
                        }


                       if (count($references->result()) != 0) {
                            ?>    
                
                    <h2>REFERENCE DETAILS: </h2>
                    <div class="info">

                <?php
                $flag_on_request=0;
                $flag_name=0;
                foreach ($references->result() as $row) {
                    

              
                    $reference_name = $row->reference_by;
                    $reference_email = $row->email;
                    $reference_contact = $row->contact;
                    $reference_institute = $row->institute;
                    $reference_position = $row->position;
                    if($row->on_request==1)
                            $flag_on_request=1;
                   if($reference_name!=NULL)
                   {    $flag_name=1;
                        echo "Name: $reference_name<br>";
                        if($reference_email!=NULL)
                        echo "Email Id: $reference_email<br>";
                        if($reference_contact!=NULL)
                        echo "Contact: $reference_contact<br>";
                        if($reference_institute!=NULL)
                        echo "Institute: $reference_institute<br>";
                        if($reference_position!=NULL)
                        echo "Position: $reference_position<br>";
                            
                        echo"<br>";
                   } 
                  
                }                if($flag_on_request==1 && $flag_name==1)
                {
                    echo "Further references available on request";
                }
                elseif($flag_on_request==1 && $flag_name==0)
                       echo "References available on request";
                
               
                ?>
                    </div>
                </div>
                   <div class="section">       <?php
                    }
                    ?>
           <div class='section'>
                <h2>DECLARATION </h2>
             
          <div class='info'>
                    I hereby declare that above information is correct to the best of my knowledge and belief.
                
                <br><br><b>-<?php
                    echo strtoupper($basic_information[0]->first_name);
                    if ($basic_information[0]->middle_name != NULL)
                        echo " " . strtoupper($basic_information[0]->middle_name);
                    if ($basic_information[0]->last_name != NULL)
                        echo " " . strtoupper($basic_information[0]->last_name);
                    ?></b>

            </div>
           </div>
            <body>
                </html>
