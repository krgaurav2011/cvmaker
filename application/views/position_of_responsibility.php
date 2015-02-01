<html>
    <head><title>CVGEN: Position Of Responsibility</title>
        <script src="../../static/js/jquery.js" type="text/javascript"></script>
                <link rel="stylesheet" type="text/css" href="../../static/css/base.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/test.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/nav_bar.css">
        <link rel="stylesheet" type="text/css" href="../../css/nav_bar.css">

        <script>
            $(document).ready(function(){
                $('#add_por').click(function(){
                    var row = $('#por').clone().find("textarea").val("").end();
                    $('#por_table').after(row,'<br>');
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
        $nav_bar=printNav(7);
        echo $nav_bar;
        ?>
        
        
                             <div class="container" id="container" style="margin-top: 28px; margin-bottom: 100px" >
            <div class ="row">
                  <div class ="span12 well" style="margin-bottom: 0px;margin-left:10px;">
            <h2>
                 Positions of Responsibility Undertaken(Optional)<br><br> 
            </h2>
            <form action="<?= base_url('cvmaker/position_of_responsibility_submit'); ?>" align =center method="post" >
                <table id="por_table">
                    <tr>
                        <td id="por"><textarea name="position_of_responsibility[]" ></textarea></td>
                    </tr>
                </table>
                <input type="button" id="add_por" value="ADD+">
                <button class="btn btn-primary">Next  <i class="icon-play"></i></button>
            </form>
        </div>
        <footer class="footer">
            <div class="container" >
                <p class="footer-description">Designed and developed by &copy;Ungineering 2014.</p>
            </div>
                             </div>
    </body>
</html>