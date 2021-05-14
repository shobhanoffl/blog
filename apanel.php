<?php 
include('lib/conn.php');
include('lib/add.php');
include('lib/updater.php');
if (isset($_GET['logout'])) {
  session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body>    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
<!--NAVIGATION BAR-->
<nav class="navbar navbar-expand-md" style="background:whitesmoke;">
  <!-- Brand -->
  <a class="navbar-brand" href="../apanel.php" style="font-weight:500;">Admin Panel</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="fa fa-bars" style="color:#0069D9;"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      
      <li class="nav-item">
      <a href="index.php" class=nav-link><i class="fa fa-home"></i> Back to Home</a>
      </li>
    
    </ul>
    <ul class="navbar-nav ml-auto">
      <li><a href="signup.php" class=nav-link><i class="fa fa-user-plus"></i> Sign Up</a></li>
      <?php if(isset($_SESSION['email'])){ ?>
      <li><a href="./apanel.php?logout=success" style="color: red;" class=nav-link><i class="fa fa-user-times"></i><?php echo"Logout" ?></a></label></li>
      <li><a href="./lib/dash.php" class=nav-link><i class="fa fa-cog"></i> Dashboard</a></li>
      <?php }else{ ?>
      <li><a href="login.php" class=nav-link><i class="fa fa-user-circle"></i><?php echo"Login" ?></a></li>
      <?php } ?>
    </ul>
  </div>
</nav>
<!--NAVIGATION BAR-->
<div style="float:left;width:25%;"><br></div>
<div style="float:left;width:50%;background: url('https://assets.materialup.com/uploads/b6992fb2-7bf4-401d-a233-e34a486b9337/gif.gif');background-size:cover;height:100vh;">
<center>
<h1 style="padding-top:45px;">Welcome to Admin Panel</h1>
<small>This Page is Completely Separate from Main Page</small>
<h6>Feel Free to Make Changes to your Blog!</h6>
</center>
</div>
<div style="float:left;width:25%;"><br></div>
</html>