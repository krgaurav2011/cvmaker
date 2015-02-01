<html>
    <head>
        <title>CVGEN: Interests</title>
         <script src="../../static/js/jquery.js" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="../../static/css/base.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/test.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/nav_bar.css">
       

        <script>
            $(document).ready(function(){
                $('#add_interest').click(function(){
                    var row = $('#interest').clone().find("textarea").val("").end();
                    $('#interest').after(row,'<br>');
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
        $nav_bar = printNav(6);
        echo $nav_bar;
        ?>
        
                             <div class="container" id="container" style="margin-top: 28px; margin-bottom: 100px" >
            <div class ="row">
                  <div class ="span12 well" style="margin-bottom: 0px;margin-left:10px;">
            <h1>
                Interests (Optional)<br><br> 
            </h1>
            <form action="<?= base_url('cvmaker/interest_submit'); ?>" align =center method="post" >
                <table id="interest">
                    Enter Your Various Interests (One Entry per Textarea, Click on add to add another interest) 
                    <tr>
                        
                        <td><textarea name="interest[]"></textarea></td>
                    </tr>
                </table>
                <input type="button" id="add_interest" value="ADD More"><br><br>
                
                <button class="btn btn-primary">Next  <i class="icon-play"></i> </button>
            </form>
        </div>
        <footer class="footer">
            <div class="container" >
                <p class="footer-description">Designed and developed by &copy;Ungineering 2014.</p>
            </div>
                             </div>
    </body>
</html>