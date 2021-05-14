<?php
include('updater.php');
include('add.php');
if(!isset($_SESSION['email']) || empty($_SESSION['email'])){
  header('location: ../apanel.php?logout=success');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
button{
  width:13em;
  height:3em;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
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
      <li><a href="../signup.php" class=nav-link><i class="fa fa-user-plus"></i> Sign Up</a></li>
      <li><a href="../apanel.php?logout=success" style="color: red;" class=nav-link><i class="fa fa-user-times"></i> Logout</a></label></li>
    </ul>
  </div>
</nav>
<!--NAVIGATION BAR-->

<div style="width:25%;float:left;"><br></div>
<div style="width:50%;float:left;">
<br>
<h5>Dashboard</h5>
<hr>
<small class="mr-auto">Welcome <i class="text-primary"><?php echo $_SESSION['name']; ?></i> Signed in as <i class="text-primary"><?php echo $_SESSION['email']; ?></i></small><br><br>
<a href="newpost.php"><button class="btn btn-success"><i class="fa fa-plus-square"></i> New Blog Post</button></a>
<a href="delpost.php"><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete Post</button></a><br><br>
<a href="newpage.php"><button class="btn btn-success"><i class="fa fa-file"></i> New Page</button></a>
<a href="delpage.php"><button class="btn btn-danger"><i class="fa fa-trash"></i> Delete Page</button></a><br><br>
<?php if(isset($_SESSION['admin'])){?>
<br>
<h5>Admin Panel</h5>
<hr>
<a href="deluser.php"><button class="btn btn-danger"><i class="fa fa-user-times"></i><?php echo " Remove User"; ?></button></a>
<a href="changeskey.php"><button class="btn btn-info"><i class="fa fa-key"></i><?php echo " Change Secret Key"; ?></button></a>
<?php } ?>
</div>
<div style="width:25%;float:left;"><br></div>

</html>