<html>
    <head>
        <title>CVgen|Login</title>
         <link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/login.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/base.css">
        <link href="../../static/css/test.css" rel="stylesheet">
        <link rel="stylesheet" href="../../static/css/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css">
        <script src="../../static/js/jquery.js"></script>

        <script>
            $(document).ready(function() {
                $('#register-form').submit(function() {
                    //event.preventDefault();
                    var data = $('#register-form').serialize();
                    var url = "<?php echo base_url('/cvmaker/register_submit');?>";
                    $.ajax(url, {
                        type: "POST",
                        data: data,
                        success: onSuccess,
                        error: onError
                    });
                    return false;
                });
                $('#login-form').submit(function() {
                    //event.preventDefault();
                    var data = $('#login-form').serialize();
                    var url = "<?php echo base_url('/cvmaker/login_submit');?>";
                    $.ajax(url, {
                        type: "POST",
                        data: data,
                        success: onLoginSuccess,
                        error: onLoginError
                    });
                    return false;
                });
            });
            function onSuccess(response) {
                // console.log(response);
                try {
                    data = $.parseJSON(response);
                    if (data.success) {
                        alert(data.errorMsg);
                        window.location.href = "<?php echo base_url('cvmaker/register_success'); ?>";
                    }
                    else {
                        alert(data.errorMsg);
                        window.location.href = "<?php echo base_url('cvmaker/login'); ?>";
                    }
                } catch (e) {
                    $('#register-error').addClass('error').html(response);
                }
            }
            function onError() {
                //console.log(response);
                alert("Error!! Something Went Wrong Please Try again");
            }
            function onLoginSuccess(response) {
                console.log(response);
                try {
                    data = $.parseJSON(response);
                    if (data.success) {
                        alert(data.errorMsg);
                        window.location.href = "<?php echo base_url('cvmaker/index'); ?>";
                    }
                    else {
                        alert(data.errorMsg);
                       // window.location.href = "<?php echo base_url('cvmaker/login'); ?>";
                    }
                } catch (e) {
                    $('#login-error').addClass('error').html(response);
                }
            }
            function onLoginError() {
                //console.log(response);
                alert("Error!! Something Went Wrong Please Try again");
            }    
        </script>
    </head>
    <body>
        <div class="well">
            <h1>CVGen</h1>
        </div>
        <div class="nav navbar-nav">
            <div class="container">
                <div class="row">
                    <ul class="pull-left">
                        <li><a href="<?php echo base_url('cvmaker/home_page'); ?>"><i class="icon-home"></i>CVgen</a></li>
                        
                    </ul>

                </div>
            </div>
        </div>
        <div id =container>
            <h5 style="margin-left: 60px"> Note: We will only save your details if you're logged in</h5>
            <div class="page-left span6" >    
                
                <h1 class="header">Login</h1>
                
                <form class="frm frm-login" id="login-form" action="<?= base_url('cvmaker/login_submit'); ?>" method="post" name="login">
                    <span id="login-error"></span>
                    <table >
                        <tr>
                            <td ><b>Email *</b></td>
                            <td><input name="login_email" type="text" value="<?php echo set_value('login_email'); ?>" required/></td>
                            <?php echo form_error('login_email'); ?>
                        </tr>
                        <tr>
                            <td><b>Password *</td>
                            <td><input name="login_password" type="password" required/></td>
                            <?php echo form_error('login_password'); ?>    
                        </tr>
                        <tr>
                            <td class="forgot-password" colspan="2"><a href="<?= base_url('cvmaker/forgot_password'); ?>"> Forgot Your Password? </a></td>
                        </tr>
                    </table>
                    <button class="btn btn-danger"><i class="fa fa-lock fa-fw " >  </i>  Login</button>
                </form>
            </div>
            <div class="page-right span6">
                <h1 class="header">Register</h1>

                <form class="frm frm-register" id="register-form" action="<?= base_url('cvmaker/register_submit'); ?>" method="post" name="register">
                    <span id="register-error"></span>
                    <table>
                        <tr>
                            <td ><b>Email *</b></td>
                            <td><input name="register_email" type="text" value="<?php echo set_value('register_email'); ?>" required/></td>
                            <?php echo form_error('register_email'); ?> 
                        </tr>
                        <tr>
                            <td><b>Password (8-20 characters in length) *</td>
                            <td><input name="register_password" type="password" required/></td>
                            <?php echo form_error('register_password'); ?> 
                        </tr>
                        <tr>
                            <td><b>Re-Enter your Password *</td>
                            <td><input name="register_passconf" type="password" required/></td>
                            <?php echo form_error('register_passconf'); ?> 
                        </tr>
                    </table>
                    <button class="btn btn-danger"><i class="fa fa-user fa-fw"></i> Register</button>
                </form>
            </div>
        </div>
        <footer class="footer">
            <div class="container" >
                <p class="footer-description">Designed and developed by &copy;Ungineering 2014.</p>
            </div>
        </footer>	
    </body>
</html>
