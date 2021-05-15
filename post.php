<?php
include('lib/updater.php');
include('lib/add.php');
?>
 
<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Classic - Responsive Bootstrap 4.0 Template</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <link rel="stylesheet" href="css/templatemo-style.css">  
    <link rel="stylesheet" href="css/sho.css">                           
</head>

<div style="float:left;width:12%;"><br></div>
<div style="float:left;width:76%;">
   <!--NAVBAR-->
   <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="./index.php" class="navbar-brand sho-site-title">shobhanoffl.tk</a>
                    
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                            <?php foreach($pgname as $pgname2) : ?>
                                <li class="nav-item">
                                <a href="./page.php?getpage=<?php echo $pgname2 ?>" class="nav-link"><?php echo $pgname2 ?></a>
                                </li>
                            <?php endforeach ?>
                            <li class="nav-item">
                            <a href="./login.php" class="nav-link"><span class="material-icons md-18" style="vertical-align:middle;">search</span> Search</a>
                            </li>
                            <li class="nav-item">
                            <a href="./login.php" class="nav-link"><span class="material-icons md-18" style="vertical-align:middle;">manage_accounts</span> Users</a>
                            </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>
    <!--NAVBAR-->
    
    <!--CENTRE-->
        <div class="tm-home-img-container">
            <img src="<?php echo $img[0]; ?>" alt="Image" class="img-fluid" style="object-fit: cover;height: 60vh;width: 100%;">
        </div>
    <!--CENTRE-->

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text sho-post-title"><?php echo $title[0]; ?></h2><br>
                        <p class="tm-subtitle sho-post-subtitle"><?php echo $subtitle[0]; ?></p>
                        <small style="color:black;">
                        An Article by <b class="sho-small"> <?php echo $author[0]; ?></b>&nbsp; :: &nbsp;
                        <i>
                        <?php
                        if(isset($edit[0])){
                            echo "Edited";
                        }
                        else{
                            echo "Posted";
                        }
                        ?>
                        </i>
                         on <b class="sho-small"> <?php echo $date[0]; ?></b>&nbsp; :: &nbsp;
                        at <b class="sho-small"> <?php echo $time[0]; ?></b>&nbsp; :: &nbsp;
                        <br><br><br><br>
                        </small>
                        </div>
                        <body class="sho-post-post"><?php echo $content[0]; ?></body><br><br>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <hr>
                        <small style="color:black; float:left; padding-top:45px;">Sources Referred: &nbsp;
                        <?php
                        $source_arr=explode(",",$sources[0]);
                        $link_arr=explode(",",$links[0]);
                        for($j=0; $j<count($source_arr); $j+=1):?>
                        <b class="sho-small"><a href="https://<?php echo $link_arr[$j]; ?>" target="_blank"><?php echo $source_arr[$j]; ?></a></b>
                        <?php endfor; ?>
                        </small>
                    </div>
                </div>
                <!--Similar Posts-->
                <div class="row" style="padding-top:15px;">
                <h2 class="tm-gold-text sho-site-subtitle text-xs-center" style="padding-bottom:15px;">Similar Posts</h2><br>

                <?php for ($i = 0; $i < count($title5); $i+=1): ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="tm-content-box">
                            <img src="<?php echo $img5[$i]; ?>" alt="Image" class="tm-margin-b-20 img-fluid" style="object-fit: cover;height: 25vh;width: 100%;">
                            <h4 class="tm-margin-b-20 tm-gold-text sho-show-title"><?php echo $title5[$i]; ?></h4>
                            <p class="tm-margin-b-20 sho-show-subtitle"><?php echo $subt5[$i]; ?>...</p>
                            <a href="./post.php?getpost=<?php echo $bno5[$i]; ?>&pgofblog=<?php echo $pgofblog3[$i]; ?>" class="tm-btn">Read More...</a>    
                        </div>  
                    </div>
                <?php endfor; ?>

                </div>
                <!--Similar Posts-->
            </div>
        </section>   
        <br><br><br>
        <!--FOOTER-->
        <footer style="background-color: black;">
            <div class="container-fluid">
                    Hello
            </div>
        </footer>
        <!--FOOTER-->

</div>
<div style="float:left;width:12%;"><br></div>

<!-- load JS files -->
<script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
<script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->

</html>