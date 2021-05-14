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
                            <a href="./search.php" class="nav-link"><span class="material-icons" style="vertical-align:middle;">search</span> Search</a>
                            </li>
                            <li class="nav-item">
                            <a href="./login.php" class="nav-link"><span class="material-icons" style="vertical-align:middle;">manage_accounts</span> Users</a>
                            </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>
    <!--NAVBAR-->

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text sho-post-title" style="padding-bottom:20px;">Search for Tags</h2>
                            <form method="GET" action="search.php">
                                <center>
                                <input type="text" name="getpost_sr" placeholder="Enter a Single Word to Search" class="form-control" style="width:30em; height:2.2em;"><br>
                                </center>
                                <input type="submit" value="Search" class="btn btn-primary">
                            </form>
                        <p class="tm-subtitle"></p>
                    </div>
                </div>
                <!--RECENT POSTS-->
                <div class="row">
                <h2 class="tm-gold-text sho-show-title text-xs-center" style="padding-bottom:15px;">Search Results</h2><br>
                <?php if (isset($_GET['getpost_sr'])){ ?>
                    <?php for ($i = 0; $i < count($title4); $i+=1): ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3" style="padding-top:25px;">
                        <div class="tm-content-box">
                            <img src="<?php echo $img4[$i]; ?>" alt="Image" class="tm-margin-b-20 img-fluid" style="object-fit: cover;height: 25vh;width: 100%;">
                            <h4 class="tm-margin-b-20 tm-gold-text"><?php echo $title4[$i]; ?></h4>
                            <p class="tm-margin-b-20"><?php echo $subt4[$i]; ?>...</p>
                            <a href="./post.php?getpost=<?php echo $bno4[$i]; ?>&pgofblog=<?php echo $pgofblog3[$i]; ?>" class="tm-btn">Read More</a>    
                        </div>  
                    </div>
                <?php endfor; ?>
                <?php
                }
                else{ 
                ?>
                <center>
                    <h4 class="tm-margin-b-20 tm-gold-text" style="color:black;">Search to see the results here</h4>
                </center>
                <?php } ?>
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