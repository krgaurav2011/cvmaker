<html>
    <head>
        <title>CVGEN: achievements</title>
        <script src="../../static/js/jquery.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $('#add_achievement').click(function() {
                    var row = $('#achievement').clone().find("textarea").val("").end();
                    $('#achievement').after(row);
                });

            });
        </script>
        
        <link rel="stylesheet" type="text/css" href="../../static/css/test.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/nav_bar.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/base.css">

    </head>
    <body>
        <div class="well">
            <h1>CVGEN</h1>
        </div>
        <?php
        include ('cvmaker_nav.php');
        $nav_bar = printNav(5);
        echo $nav_bar;
        ?>


        <div class="container" id="container" style="margin-top: 28px; margin-bottom: 100px" >
            <div class ="row">
                <div class ="span12 well" style="margin-left: 10px; margin-bottom: 0px;">
                    <h1>
                        Achievements (Optional) <br><br>
                    </h1>    
                    <p>Mention Your Special Achievements.(One per Text-Area).Click on ADD to add another achievement</p>

                    <form action="<?= base_url('cvmaker/achievement_submit'); ?>" align =center method="post" >


                        <textarea id="achievement" name="achievement[]" style="width:400;height: 70;float: left;padding: 20px;border-left-width: 1px;margin-left: 91px;"></textarea><br>
                        <input type="button" id="add_achievement" value="ADD+"><br><br>
                        <button class="btn btn-primary" >Next  <i class="icon-play"></i> </button>


                    </form>
                </div>
                <footer class="footer">
                    <div class="container" >
                        <p class="footer-description">Designed and developed by &copy;Ungineering 2014.</p>
                    </div>
            </div>
                             </div>

    </body>
</html>