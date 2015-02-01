<html>
    <head>
        <title>CVGEN: skills</title>

        <script src="../../static/js/jquery.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="../../static/css/base.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/test.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../static/css/nav_bar.css">
        <link rel="stylesheet" type="text/css" href="../../css/nav_bar.css">


        <script>
            $(document).ready(function() {
                $('#add-new-tech').click(function() {
                    var skill = '<input type=text name= unlisted_skill[] placeholder=skill>';
                    var rate = "<td><select name=unlisted_rating[]><option value='0'>Select .. </option><option  value='1'>Poor </option><option value='2'> Fair </option><option value='3'> Good </option><option value='4'> Very Good</option><option value='5'> Excellent</option></select></td>";
                    // var rate = $('#skill_rating').clone();
                    $('table#skills').append('<tr><td>', skill, rate, '</td></tr>');

                });
                $('#add').click(function() {
                    var row = $('#skillsrow').clone();
                    $('table#skills').append(row);
                });
                $('#add-language').click(function() {
                    var language = '<input type=text name=newlanguage[] placeholder=Enter&nbsp;language>';
                    $('#newlanguage').append(language);


                });
                $('#add-new-nontech').click(function() {
                    var nontech = '<input type=text name=nontechnical[]>';
                    $('#newskill').after(nontech);

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
        $nav_bar = printNav(4);
        echo $nav_bar;
        ?>

        <h1>Enter Your Skills</h1>

        <div class="container" id="container" style="margin-top: 28px; margin-bottom: 28px; padding:25px" >
            <div class ="row">


                <form action="<?php echo base_url('cvmaker/skills_submit') ?>" method="post">

                    <h2 align='left'> Technical </h2>    
                    <table id="skills">
                        <tr id="skillsrow">
                            <td><select name=skill[]>
                                    <option value='select'>Select .. </option>
                                    <?php
                                    foreach ($list as $row) {
                                        if ($row->category == 1 && $row->authorised == 1) {
                                            echo "<option value=" . $row->skills . ">" . $row->skills . "</option>";
                                        }
                                    }
                                    ?> 

                                </select>
                            </td>
                            <td id="skill_rating">
                                <select name=rating[]>";
                                    <option value='0'> Select ..</option>
                                    <option value='1'> Poor </option>
                                    <option value='2'> Fair </option>
                                    <option value='3'> Good </option>
                                    <option value='4'> Very Good</option>
                                    <option value='5'> Excellent</option>
                                </select>
                            </td>
                        </tr>    
                    </table>
                    <input type=button id="add" value="ADD+">
                    <input type="button" id="add-new-tech"value="Add your own">



                    <h2 align='left'> Non - technical </h2>


                    <h3>    Languages Known :</h3>

                    <?php
                    foreach ($list as $row) {
                        if ($row->category == 0 && $row->authorised == 1) {
                            ?>        

                            <input type=checkbox value="<?php echo $row->id; ?>" name=lang[]> <?php echo $row->skills; ?> 
                            <?php
                        }
                    }
                    ?>
                    <span id=newlanguage ></span>       

                    <input type=button onclick="" id="add-language" value="ADD your Own">
                    <br>
                    <br>
                    <h3>Other Skills : </h3>
                    <input type="text"  id='newskill' name='nontechnical[]'><br>
                    <input type=button onclick="" id="add-new-nontech" value="ADD your Own"><br><br>
                    <button type="submit" class="btn btn-primary">Next <i class="icon-play"></i> </button>


                </form>

                </body>
                </html>