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
                    <a href="index.php" class="navbar-brand sho-site-title">shobhanoffl.tk</a>
                    
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
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>
    <!--NAVBAR-->
    
    <!--CENTRE-->
        <div class="tm-home-img-container">
            <img src="<?php echo $pgimg3[0] ?>" alt="Image" class="img-fluid" style="object-fit: cover;height: 75vh;width: 100%;">
        </div>
    <!--CENTRE-->

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text sho-pg-title"><?php echo $pgname3[0] ?></h2>
                        <p class="tm-subtitle"><?php echo $pgdesc3[0] ?></p>
                    </div>
                </div>
                <!--RECENT POSTS-->
                <div class="row">
                <h2 class="tm-gold-text sho-show-title text-xs-center" style="padding-bottom:15px;">Posts from this Page</h2><br>

                    <?php for ($i = 0; $i < 8; $i+=1): ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" style="padding-top:25px;">
                        <div class="tm-content-box">
                            <img src="<?php echo $img3[$i]; ?>" alt="Image" class="tm-margin-b-20 img-fluid" style="object-fit: cover;height: 25vh;width: 100%;">
                            <h4 class="tm-margin-b-20 tm-gold-text"><?php echo $title3[$i]; ?></h4>
                            <p class="tm-margin-b-20"><?php echo $subt3[$i]; ?>...</p>
                            <a href="./post.php?getpost=<?php echo $bno3[$i]; ?>" class="tm-btn">Read More</a>    
                        </div>  
                    </div>
                <?php endfor; ?>
                
                </div>
                <!--RECENT POSTS-->
            </div>
        </section>   
        
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