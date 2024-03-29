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

<div style="float:left;width:100%;">
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
                <!--POSTS FROM THIS PAGE-->
                <div class="row" style="padding-top:15px;">
                <h2 class="tm-gold-text sho-site-subtitle text-xs-center" style="padding-bottom:15px;">Posts from this Page</h2><br>

                <?php for ($i = 0; $i < count($title5); $i+=1): ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="tm-content-box">
                            <img src="<?php echo $img5[$i]; ?>" alt="Image" class="tm-margin-b-20 img-fluid" style="object-fit: cover;height: 25vh;width: 100%;">
                            <h4 class="tm-margin-b-20 tm-gold-text"><?php echo $title5[$i]; ?></h4>
                            <p class="tm-margin-b-20"><?php echo $subt5[$i]; ?>...</p>
                            <a href="./post.php?getpost=<?php echo $bno5[$i]; ?>&pgofblog=<?php echo $pgofblog3[$i]; ?>" class="tm-btn">Read More</a>    
                        </div>  
                    </div>
                <?php endfor; ?>

                </div>
                <!--POSTS FROM THIS PAGE-->
            </div>
        </section>   
        <section style="height:35vh;width:100%;"><br></section>
        <!--FOOTER-->
        <footer style="background-color: black;">
            <div class="container-fluid">
            All the Posts are of Personal opinions, in case of any dispute, Mail to rshobhan02@gmail.com
            </div>
        </footer>
        <!--FOOTER-->

</div>

<!-- load JS files -->
<script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
<script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
<script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->

</html>