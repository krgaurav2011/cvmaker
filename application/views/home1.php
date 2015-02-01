<!DOCTYPE html>
<html>
    <head>
        <title>CVgen|Home</title>
        
        <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One|Sirin+Stencil|Contrail+One|Piedra|Revalia|Damion|Goblin+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../../static/css/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../../static/css/bootstrap.css">
         <link href="../../static/css/test.css" rel="stylesheet">
        <link href="../../static/css/base.css" rel="stylesheet">
        <script src="../../static/js/jquerymin.js"></script>
        <script src="../../static/js/bootstrap.min.js"></script>
       

    </head>
    <script>
        $(document).ready(function(){ 
    $("#myTab li:eq(0) a").tab('show')
});
</script>
    
    
    
    
    <body>
        
        <div class="well">
            
            
            <img class="wellimg"  src="../../static/img/Ungineering_logo.png "></div> 
                <div class="nav">
            <div class="container">


                <div class="row">
                    <ul class="nav nav-tabs" role="tablist" id="myTab">
                        <li class="active"><a data-toggle="tab" href="#cvgen"><i class="fa fa-home"></i> CVgen</a></li>
                        <li><a data-toggle="tab" href="#aboutus"><i class="fa fa-beer "></i> About us</a></li>
                        <?php  
                        if (!isset($_SESSION['email']))
                           
                        echo "<li><a href=". base_url('cvmaker/login') ."><i class='fa fa-male '></i> Sign up/Login</a></li>";
                        else
                        echo "<li><a href=". base_url('cvmaker/logout') ."><i class='icon-off '></i> Logout</a></li>";    
                         ?>
                    
                    
                        <li><a href="#help" role="tab" data-toggle="tab"><i class="fa fa-puzzle-piece "></i> Help</a></li>
                    </ul>
                </div>
            </div>
        </div>
         <div class="tab-content">

<div  id="cvgen" class="tab-pane fade in active">
    <div class="jumbotron" style="margin-bottom: 0px">
            
            <div class="container">
                
                <p></p>

            </div>
        </div> 
        <div class="neighborhood-guides">
            <div class="container">
                
                <span class="name"><?php
                    if (isset($_SESSION['email'])) {
                        echo " Welcome " . $_SESSION['email'];
                    }
                    else { echo "Need a good CV, You are here at the right spot.";}?>
                    <?php
                    $this->load->model('cvmaker_model_fetch');
                    $out = $this->cvmaker_model_fetch->complete_cv($_SESSION['id']);
                    if($out==0 || !isset($_SESSION['email'])){
                        ?><a href="<?php echo base_url('/cvmaker/basic_information');?>" class="btn btn-large btn-primary " style="margin-left: 100px;">Get Started !</a>
                        <p style="font-size:20px"> Note: We will only save your details if you're logged in.</p>
                    <?php
                    
                    } 
                    else {
                   ?>                       
                     <a href="#" class="btn btn-large btn-primary disabled" style="margin-left: 20 px;">Get Started !</a>
                <a href="<?php echo base_url('/cvmaker/template');?>" class="btn btn-large btn-primary" style="margin-left: 20px;">Get Your CV !</a>
               <?php  }
                 ?>
            </span>
                
            </div>
        </div>
        <div class="learn-more">


            <div class="container">

                <div class="row">
                    <div class ="span6">
                        <h3>Create your best CV</h3>
                        <p>A curriculum vitae (CV) provides an overview of a person's experience and other qualifications. A CV is typically the first item that a potential employer encounters regarding the job seeker and is typically used to screen applicants, often followed by an interview, when seeking employment. </p>
                        <p>Need one,</p>
                        
                        <p><a href="<?php echo base_url('cvmaker/basic_information'); ?>">Start Here</a></p>
                    </div>

                    <div class="span6">
                        <h3>Ungineering</h3>
                        <p>Ungineering aims to build a student community which is capable of building high end software products on their own. The idea is to give a student the confidence to build real world applications that people will use and the opportunity to deliver the same while she is still in college. This will be achieved by providing the student the practical knowhow and exposure, so that by the time she graduates, she not only understand the nuances of technology but also has a solid base to build her career upon it. </p>
                        <p><a href="www.ungineering.com">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
  <div id="aboutus" class="tab-pane fade"> 
      
      
      
         

            <div class="container">
                    <div class="introcvgen">
          <h2>We here at CVgen,</h2>
          <p> will help u create the best possible resumes you can imagine. Just fill in your details and wait to download the CV that will open doors to the future.</p>
  
      
      
      </div>
                <div class="team">
                <h1>The TEAM </h1> 
                <div class="row" >
                    <div class ="span3">
                        <img src="../../static/img/modu.jpg"><br>
                        
                        <div class="name">Madhumita Gopal</div>
                        <div class="text">" Growing old is compulsory,Growing up is not !!!"<br> <br> </div>
                        <br><br><br><br><br><br>
                        <div class=" icon pull-right " >
                        <a href="https://github.com/madhumitagopal"><i class="fa fa-github-square fa-3x"></i></a>
                        <a href="https://www.facebook.com/madhumita.gopal.9?fref=ts"><i class="fa fa-facebook-square fa-3x"></i></a>
                        </div>
                        </div>
                     <div class ="span3">
                         <img src="../../static/img/namit.jpg"><br>
                         <div class="name">Namit Mahuvakar</div>
                         <div class="text">" Life isn't about waiting for the storm to pass ... it's about learning to dance in the rain! " </div><br><br><br>
                          <div class="icon pull-right " >
                        <a href="https://github.com/namitmr"><i class="fa fa-github-square fa-3x"></i></a>
                        <a href="https://www.facebook.com/MEGAMIND.Namit?ref=tn_tnmn"><i class="fa fa-facebook-square fa-3x"></i></a>
                        </div>
                        </div>
                     <div class ="span3">
                         <img src="../../static/img/gaurav2.jpg" style="height:248px; width:190px"><br>
                         <div class="name">Kumar Gaurav</div>
                         <div class="text">" Strangers think I'm quiet. Friends think I'm outgoing. In Short -I have an attitude and I know how to use it!"</div>
                         <br>
                          <div class="icon pull-right " >
                        <a href="https://github.com/krgaurav2011"><i class="fa fa-github-square fa-3x"></i></a>
                        <a href="https://www.facebook.com/kr.gaurav2011?fref=ts"><i class="fa fa-facebook-square fa-3x"></i></a>
                        </div>
                        </div>
                     <div class ="span3">
                         <img src="../../static/img/562553_484074264999446_1991729427_n.jpg"><br>
                         <div class="name">Ankit Rathi</div>
                         
                         <div class="text">" One of the nicest thing about life is the way we must regularly stop whatever it is we are doing and devote out attention to eating. " </div>
                         
                         <div class="icon pull-right " >
                        <a href="https://github.com/ankitrathi94"><i class="fa fa-github-square fa-3x"></i></a>
                        <a href="https://www.facebook.com/ankit.rathi.94?fref=ts"><i class="fa fa-facebook-square fa-3x"></i></a>
                        </div>
                        </div>
                </div>
                </div>
                </div>
  </div>
             <div id="help" class="tab-pane">
                 <div class="container" style="align : center; ">
                     For any Queries !!!<br>
                     Write to us at <b>gaurav999396@gmail.com</b> <br>
                     Or Visit our Facebook Page <a href="www.facebook.com/cvgen"><i class="fa fa-facebook-square fa-3x"></i></a>
                 </div>
             </div>
         </div>
         
        
        <footer class="footer">
            <div class="container" >
                <p class="footer-description ">Designed and developed by &copy;Ungineering 2014.</p>
            </div>
        </footer>	
    </body>
</html>