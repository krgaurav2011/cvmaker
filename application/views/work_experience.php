<html>
    <head>
        <title>CVGEN: Work Experience</title>
        <script src="../../static/js/jquery.js" type="text/javascript"></script>
        <script src="../../static/js/workduration.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="../../static/css/base.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/test.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/nav_bar.css">


        
        
        <script>
            $(document).ready(function() {
                $('#add_project').click(function() {
                    var row = $('#project_row').clone().find("input:text").val("").end();
                    $('#project_row').after(row);
                });
                $('#add_intern').click(function() {
                    var row = $('#intern_row').clone().find("input:text").val("").end();
                    $('#intern_row').after(row);
                });
                $('#add_work').click(function() {
                    var row = $('#work_row').clone().find("input:text").val("").end();
                    $('#work_row').after(row);
                });
            });

        </script>
    </head>
    <body>
        <div class="well">
            <h1>CVGEN</h1>
        </div>
        <?php
        include ('cvmaker_nav.php');
        $nav_bar = printNav(3);
        echo $nav_bar;
        ?>
        <div class="container" id="container" >
            <div class ="row">

                <form name=work_experience action="<?= base_url('cvmaker/work_experience_submit'); ?>"  method="post" >
                    <div class ="span12 well" style="margin-bottom: 0px;">
                        <h1>
                            Project Details
                        </h1>
                        (One Entry per row)



                        <table id="project">
                            <tr><th>Project Title</th>
                                <th>Organisation</th>
                                <th>Duration</th>
                                <th>Place</th>
                                <th>Other details</th>
                            </tr>
                            <tr id="project_row">
                                <td><input type="text" name ="project_name[]"></td>
                                <td><input type="text" name ="project_organisation[]"></td>
                                <td><input type=text name=project_duration[] ></td>
                                <td><input type=text name="project_place[]" ></td> 
                                <td><input type=text name="project_details[]" ></td>  
                            </tr>
                        </table>
                        <input type="button" value="ADD+" id="add_project">
                    </div>
            </div>
        </div>

        <div class="container" id="container"  style="margin-top: 28px;">
            <div class ="row">
                <div class="span12 well" style="margin-bottom: 0px;">
                    <h1>
                         Internship Details<br> 

                       <br>
                    </h1>
                    <table id="intern">
                        <tr><th>Intern Title</th>
                            <th>Organization</th>
                            <th>Duration</th>
                            <th>Place</th>

                        </tr>
                        <tr id="intern_row">
                            <td><input type="text" name ="intern_name[]" ></td>
                            <td><input type=text name=intern_organisation[] ></td>
                            <td><input type=text name=intern_duration[] ></td>
                            <td><input type=text name="intern_place[]" ></td>
                        </tr>
                    </table>
                    <input type="button" value="ADD+" id="add_intern">
                </div>
            </div>
        </div>
        <div>


            <div class="container" id="container"  style="margin-top: 28px; margin-bottom: 100px;">
                <div class ="row">
                    <div class="span12 well" style="margin-bottom: 0px;">
                        <h1>
                             Work Details<br> 

                            <br>
                        </h1>
                        <table id="work">
                            <tr><th>Job Title</th>
                                <th>Organization</th>
                                <th>Place</th>
                                <th colspan="2">Duration</th>
                            </tr>
                            <tr><td colspan="4"name=>current experience:</td></tr>
                            <tr id>
                                <td><input type="text" name ="cur_work_position" ></td>
                                <td><input type=text name=cur_work_organisation ></td>
                                <td><input type=text name="cur_work_place" ></td>
                                <td>since:Month<select name=month><?php
                                        for ($i = 1; $i <= 12; $i++) {
                                            echo "<option value=$i>" . $i . "</option>";
                                        }
                                        ?></select>Year<select name=year><?php
                                        for ($i = 2014; $i >= 1990; $i--) {

                                            echo "<option value=$i>" . $i . "</option>";
                                        }
                                        ?></select></td> 

                            </tr>

                            <tr><td colspan="4">Prior experience(s):</td>
                            <tr id="work_row">
                                <td><input type="text" name ="prior_work_position[]" ></td>
                                <td><input type=text name=prior_work_organisation[] ></td>
                                <td><input type=text name="prior_work_place[]" ></td>
                                <td><input type=text name=prior_work_duration></td>
                            </tr>


                        </table>
                        <input type="button" value="ADD+" id="add_work">


                        <button class="btn btn-primary">Next  <i class="icon-play"></i> </button>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container" >
                    <p class="footer-description">Designed and developed by &copy;Ungineering 2014.</p>
                </div>
            </footer>	
    </body>
</html>