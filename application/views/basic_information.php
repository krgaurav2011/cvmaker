<!DOCTYPE HTML>
<html>
    <head>
        <title>CVGEN:Basic Information</title>
        <script src="../../static/js/jquery.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="../../static/css/base.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/test.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/nav_bar.css">




        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        
         <script>
            $(function() {
                $("#date_pick").datepicker({
                    showOn: "button",
                    buttonImage: "../../static/img/calendar.jpg",
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "1970:2006",
                    dateFormat: 'dd-mm-yy',
                    buttonImageOnly: true
                });
            });
        </script>

        <script>
        /*    $(document).ready(function() {

                $('#basic_information_form').submit(function() {
                    //event.preventDefault();
                    var data = $('#basic_information_form').serialize();
                   var url = "<?php echo base_url('/cvmaker/basic_information_submit'); ?>";
                    $.ajax(url, {
                        type: "POST",
                        data: data,
                        success: onSuccess,
                        error: onError
                    });
                    return false;
                });
            });
            function onSuccess(response) {
                console.log(response);
                data = $.parseJSON(response);
                if (data.success) {
                    alert(data.errorMsg);
                    //window.location.href = "<?php echo base_url('cvmaker/register_success'); ?>";
                }
                else {
                    alert(data.errorMsg);
                    // window.location.href = "<?php echo base_url('cvmaker/login'); ?>";
                }
                //('#register-error').addClass('error').html(response);
            }

            function onError() {
                console.log(response);
                alert("Error!! Something Went Wrong Please Try again");
            }


*/
        </script>
    </head>
    <body style="text-align: left"
          <div class="well"><h1>CVgen</h1></div>
              <?php
              include 'cvmaker_nav.php';
              $nav_bar = printNav(1);
              echo $nav_bar;
              //echo "<div id=progressbar></div>";
              ?>
        <div class="container" id="container"  style="margin-top: 28px;">
            <div class ="row">

                <form name=frm id='basic_information_form' method=post action="<?php echo base_url('cvmaker/basic_information_submit'); ?>">
                    <div class="span12 well" style="margin-bottom: 0px;">
                        <?php echo"<font color =red>" . validation_errors() . "</font><br>"; ?>
                        <table cellpadding=3 cellspacing=5>
                            <tr>
                                <td>First name *:</td>
                                <td><input type=text name=first_name value=<?php echo set_value('first_name'); ?>></td>
                                <?php // echo form_error('first_name'); ?>
                                <td>Middle name:</td>
                                <td><input type=text name=middle_name value=<?php echo set_value('middle_name'); ?>></td>
                                <?php echo form_error('middle_name'); ?>
                                <td>Last name:</td>
                                <td><input type=text name=last_name value=<?php echo set_value('last_name'); ?>></td>
                                <?php //echo form_error('last_name'); ?>
                            </tr>
                            <tr>
                                <td>Email Id *:</td>
                                <td><input type=text name=email value=<?php echo set_value('email'); ?>></td>
                                <?php //echo form_error('email'); ?> 
                            </tr>
                            <tr>    
                                <td>Mobile *:</td>
                                <td><input type=text name=phone_no value=<?php echo set_value('phone_no'); ?>></td>
                                <?php //echo form_error('phone_no'); ?> 
                            </tr>
                            <tr>
                                <td>Date Of Birth *</td>
                                <td><input type="text" size="12" id="date_pick" placeholder="dd/mm/yyyy" name="date_of_birth"</td>
                        </table>

                        <h3>Enter an Objective:<br></h3>
                        <input type="text" name="objective">
                        <h3>OR Select one of these :<br></h3>
                        <input type="radio" name="objectiver" value="To make a sound position in corporate world and work enthusiastically in team to achieve goal of the organization with devotion and hard work.">To make a sound position in corporate world and work enthusiastically in team to achieve goal of the organization with devotion and hard work.<br>
                        <input type="radio" name="objectiver"value="To work in pragmatic way in an organization where I can show my talent and enhance my skills to meet company goals and objective with full integrity and zest">To work in pragmatic way in an organization where I can show my talent and enhance my skills to meet company goals and objective with full integrity and zest<br>
                        <input type="radio" name="objectiver" value="To work in a progressive organization which can expand all my knowledge and provided me exciting opportunities to utilize my skills and qualification to produce result fidelity.">To work in a progressive organization which can expand all my knowledge and provided me exciting opportunities to utilize my skills and qualification to produce result fidelity.<br>
                        <input type="radio" name="objectiver" value="To work in rapidly growing organization with a dynamic environment and achieve organizational goal with my best efforts.">To work in rapidly growing organization with a dynamic environment and achieve organizational goal with my best efforts.<br>
                        <input type="radio" name="objectiver" value="">
                        To seek a responsible and challenging position in the Organization where my knowledge and experience can be Shared and enriched.<br>
                        <input type="radio" name="objectiver" value=" To have a challenging career in corporate world and to be a successful professional">
                        To have a challenging career in corporate world and to be a successful professional<br>
                        <input type="radio" name="objectiver" value="I aspire for a challenging position in a professional Organization where I can enhance my skills and strengthen them in conjunction with Organization’s goals. A self motivated achiever with an ability to plan and execute.">I aspire for a challenging position in a professional Organization where I can enhance my skills and strengthen them in conjunction with Organization’s goals. A self motivated achiever with an ability to plan and execute.<br>
                        <input type="radio" name="objectiver" value=" A challenging position that will utilize my extensive technical skills and will lead me to innovative work environment.">
                        A challenging position that will utilize my extensive technical skills and will lead me to innovative work environment.<br>
                        <input type="radio" name="objectiver" value=" A Position that will harness strong problem solving analytical interpersonal and networking skills and will allow working with a high performance team working on cutting edge of technology.">
                        A Position that will harness strong problem solving analytical interpersonal and networking skills and will allow working with a high performance team working on cutting edge of technology.<br>
                        <input type="radio" name="objectiver" value=" To succeed in an environment of growth and excellence and earn a job which provides me satisfaction and self development and help me to achieve organizational goal.">
                        To succeed in an environment of growth and excellence and earn a job which provides me satisfaction and self development and help me to achieve organizational goal.<br>
                        <input type="radio" name="objectiver" value="To succeed in an environment of growth and excellence and earn a job which provide me job satisfaction and self development and help me achieve personal as well as organizational goals." checked="true">
                        To succeed in an environment of growth and excellence and earn a job which provide me job satisfaction and self development and help me achieve personal as well as organizational goals.<br>

                        <td colspan="2"><button class="btn btn-primary">Next  <i class="icon-play"></i> </button></td>
                        </tr>    
                        </table>
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





