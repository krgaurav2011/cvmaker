<html>
    <head><title>CVGEN: References</title>
        
        <script src="../../static/js/jquery.js" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="../../static/css/base.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/test.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/nav_bar.css">
        

        <script>
            $(document).ready(function(){
                $('#add_reference').click(function(){
                    var row = $('#reference').clone().find("input:text").val("").end();
                    $('#reference').after('<hr>',row);
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
        $nav_bar=printNav(8);
        echo $nav_bar;
        ?>
        
                             <div class="container" id="container" style="margin-top: 28px; margin-bottom: 100px" >
            <div class ="row">
                  <div class ="span12 well" style="margin-bottom: 0px;">
            <h1>
                References (Optional)<br> <br>
            </h1>
            <form action="<?= base_url('cvmaker/reference_submit'); ?>" align =center method="post" >
   <input type="checkbox" name="on_request" value="1">Tick if references available on request               
 <table id="reference">

                    <tr>
                        <td>Referred By :</td>
                        <td><input type="text" name ="reference_by[]" ></td>
                    </tr>
                    <tr>
                        <td>E-mail ID : </td>
                        <td><input type=text name=email[]></td>
                    </tr>
                    <tr>
                        <td>Contact : </td>
                        <td><input type=text name="contact[]" ></td>
                    </tr>
                    <tr>
                        <td>Institute :</td>
                        <td><input type=text name="institute[]" ></td>
                    </tr>

                    <tr id="after">
                        <td>Position :</td>
                        <td><input type=text name="position[]" ></td>
                    
                </table>
                
            
            <input type="button" id="add_reference" value="ADD More">
             <button class="btn btn-primary">Next  <i class="icon-play"></i></button>
            </form>
        </div>
       </div>
                             </div>
        
    </body>
</html>