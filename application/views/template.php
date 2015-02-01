<html>
    <head>
        <title>CVGen</title>
        <link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/login.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/base.css">
        <link href="../../static/css/test.css" rel="stylesheet">
        <style>
            .template
            {
                border:1px solid black;
                width:700px;
            }

            img { -webkit-transition: all .2s ease-in-out; } 
            img:hover { -webkit-transform: scale(2);
                        width:100px;height:100px; 
                        background-color: #E8E8E8; 
                        webkit-border-radius: 5px;
                        -moz-border-radius: 5px;
                        border-radius: 5px; 
                        font-family:"Comic Sans MS", cursive, sans-serif; 
                        font-size:5px;} 
            #content {width:100%;} </style>

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
                        <?php 
                        if(isset($_SESSION['email']))
                        {
                            
                        ?>    
                        <li><a href="<?php echo base_url('cvmaker/logout'); ?>"><i class="icon-off"></i>Logout</a></li>
                        <?php
                        }
                        ?>
                    </ul>

                </div>
            </div>
        </div>


        <div class="container" id="container" style="margin-top: 28px; margin-bottom: 100px" >
            <h3>Select a Template for your CV </h3><br>
            <a href="<?= base_url('cvmaker/template1'); ?>"> <div class="template"> <img src="../../static/img/template1_1.JPG" style="height:300px;width:300px;">
                    <img src="../../static/img/template1_2.JPG" style="height:300px;width:300px;"></div></a>
            <br>   
            <a href="<?= base_url('cvmaker/template2'); ?>"> <div class="template">  <img src="../../static/img/template2_1.JPG" style="height:300px;width:300px;">

                    <img src="../../static/img/template2_2.JPG" style="height:300px;width:300px;"></div></a>
        </div>
        <footer class="footer">
            <div class="container" >
                <p class="footer-description">Designed and developed by &copy;Ungineering 2014.</p>
            </div>
        </footer>	
    </body>
</html>
