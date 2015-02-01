<html>
    <head>
        <title>CVGEN:Qualification</title>
          <script src="../../static/js/jquery.js" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="../../static/css/base.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/test.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/nav_bar.css">
        

       
    </head>
    <body>
        <div class="well">
            <h1>CVGEN</h1>
        </div>
        <?php
        include 'cvmaker_nav.php';
        $nav_bar = printNav(2);
        echo $nav_bar;
        ?>
        <div class="container" id="container">
            <div class ="row">
            <form action ="<?= base_url('cvmaker/qualification_submit'); ?>" method = "POST">
                <div class="span12 well" style= "margin-bottom: 0px;">
                <table>
                    <tr>
                        <td><h3>Enter your class 10 details<h3></td>
                    </tr>
                    <tr>
                        <td>Boards *:<a href="http://www.indiastudycenter.com/univ/list.htm" target="_blank"><img src="../../static/img/qualification.png" style="margin-left: 145px;margin-top: 3px;"></a></td>
                        <td><input value="<?php echo set_value('name_10'); ?>"nput type = "text" placeholder = "boards" name = "name_10" value="<?php echo set_value('name_10'); ?>" ></td><?php echo form_error('name_10'); ?>
                    </tr>
                    <tr>
                        <td>School *:</td>
                        <td><input type = "text" placeholder = "name of school" name = "school_10" value="<?php echo set_value('school_10'); ?>" ></td><?php echo form_error('school_10'); ?>
                    </tr>
                    <tr>
                        <td>Year Of Passing *:</td>
                        <td><select name = "year_of_passing_10" value="<?php echo set_value('year_of_passing_10'); ?>"><?php
                        for ($i = 1970; $i <= 2020; $i = $i + 1)
                            echo "<option value=$i>" . $i
                        ?>  </select></td><?php echo form_error('year-of_passing_10'); ?>
                    </tr>
                    <tr>
                        <td>Percentage *:</td>
                        <td><select  name="performance_scale_10" validators="performance" >
                                <option value="10" >CGPA(Scale of 10)</option>
                                <option value="4" >CGPA(Scale of 4)</option>
                                <option value="100" >%</option>
                            </select></td> 
                        <td><input type = "text" placeholder = "Percentage/GP" name = "percentage_10" value="<?php echo set_value('percentage_10'); ?>" ></td><?php echo form_error('percentage_10'); ?>
                    </tr>
                </table>    
        </div>
             </div>
                    </div><!--details of class 12 -->            
         
                             <div class="container" id="container"  style="margin-top: 28px;">
            <div class ="row">
                <div class="span12 well" style= "margin-bottom: 0px;">
            <table>           
                <tr>
                    <td><h3>Enter your class 12 details<h3>
                </tr>
                <tr>
                    <td>Boards *:<a href="http://www.indiastudycenter.com/univ/list.htm" target="_blank"><img src="../../static/img/qualification.png" style="margin-left: 145px;margin-top: 3px;"></a></td>
                    <td><input type = "text" placeholder = "boards" name = "name_12" value="<?php echo set_value('name_12'); ?>"></td><?php echo form_error('name_12'); ?>
                </tr>
                <tr>
                    <td>School *:</td>
                    <td><input type = "text" placeholder = "name of school" name = "school_12" value="<?php echo set_value('school_12'); ?>"></td><?php echo form_error('school_12'); ?>
                </tr>
                <tr>
                    <td>Year Of Passing *:</td>
                    <td><select name = "year_of_passing_12" value="<?php echo set_value('year_of_passing_12'); ?>"><?php
                    for ($i = 1970; $i <= 2020; $i = $i + 1)
                        echo "<option value=$i>" . $i ;
                ?>  </select></td><?php echo form_error('year-of_passing_12'); ?>
                </tr>
                <tr>
                    <td>Percentage *:</td>
                    <td><select  name="performance_scale_12" validators="performance" >
                            <option value="10" >CGPA(Scale of 10)</option>
                            <option value="4" >CGPA(Scale of 4)</option>
                            <option value="100" >%</option>
                        </select></td> 
                    <td><input type = "text" placeholder = "Percentage/GP" name = "percentage_12" value="<?php echo set_value('percentage_12'); ?>" ></td><?php echo form_error('percentage_12'); ?>
                </tr>
            </table>    
                </div>
            </div>
    </div>
                       <!--details of graduation -->
    
                             <div class="container" id="container"  style="margin-top: 28px; margin-bottom: 100px;">
            <div class ="row">
                <div class="span12 well" style= "margin-bottom: 0px;">
            <table>
                <tr>
                    <td><h3>Enter graduation details<h3></td>
                </tr>
                <tr>
                    <td>Institute *:<a href="http://www.indiastudycenter.com/univ/list.htm" target="_blank"><img src="../../static/img/qualification.png" style="margin-left: 145px;margin-top: 3px;"></a></td>
                    <td><input type = "text" placeholder = "institute" name = "graduation_institute" value="<?php echo set_value('graduation_institute'); ?>"></td><?php echo form_error('graduation_institute'); ?>
                </tr>
                <tr>
                    <td>University *:</td>
                    <td><input type = "text" placeholder = "university" name = "graduation_university" value="<?php echo set_value('graduation_university'); ?>" ></td><?php echo form_error('graduation_university'); ?>
                </tr>
                <tr>
                    <td>Department *:</td>
                    <td><input type = "text" placeholder = "Department" name = "graduation_department" value="<?php echo set_value('graduation_department'); ?>" ></td><?php echo form_error('graduation_department'); ?>
                </tr>
                <tr>
                    <td>Degree *:</td>
                    <td><input type = "text" placeholder = "degree" name = "graduation_degree" value="<?php echo set_value('graduation_degree'); ?>" ></td><?php echo form_error('graduation_degree'); ?>
                </tr>
                <tr>
                    <td>Year Of Passing *:</td>
                    <td><select name = "year_of_passing_graduation" value="<?php echo set_value('year_of_passing_graduation'); ?>"><?php
                                for ($i = 1970; $i <= 2020; $i = $i + 1)
                                    echo "<option value=$i>" . $i
                     ?> </select></td><?php echo form_error('year-of_passing_graduation'); ?>
                </tr>
                <tr>
                    <td>Performance(UG)*:</td>
                    <td><select  name="performance_scale_graduation" validators="performance" >
                            <option value="10" >CGPA(Scale of 10)</option>
                            <option value="4" >CGPA(Scale of 4)</option>
                            <option value="100" >%</option>
                        </select></td> 
                    <td><input type = "text" placeholder = "Percentage/GP" name = "percentage_graduation" value="<?php echo set_value('percentage_graduation'); ?>" ><td><?php echo form_error('percentage_graduation'); ?>
                </tr>
                <tr>
                    <td><button class="btn btn-primary">Next  <i class="icon-play"></i> </button></td>
                </tr>
            </table>
        </form>
</div>
            </div>
                             </div>
                       
                                 <footer class="footer">
        <div class="container">
            <p class="footer-description">Designed and developed by &copy;Ungineering 2014.</p>
        </div>
    </footer>                   
                       
</body>
</html>


