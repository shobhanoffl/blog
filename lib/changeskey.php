<?php
include('updater.php');
include('add.php');

if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
  header('location: ../apanel.php?logout=success');
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
a{
  text-decoration:none;
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
    <script src="https://cdn.tiny.cloud/1/62tdblaj0rg0lb7itafj9i1n6nku6s8h5p42u34v8cn71vgo/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
      <a href="../index.php" class=nav-link><i class="fa fa-home"></i> Back to Home</a>
      </li>
    
    </ul>
    <ul class="navbar-nav ml-auto">
      <li><a href="../signup.php" class=nav-link><i class="fa fa-user-plus"></i> Sign Up</a></li>
      <li><a href="../apanel.php?logout=success" style="color: red;" class=nav-link><i class="fa fa-user-times"></i> Logout</a></label></li>
    </ul>
  </div>
</nav>
<!--NAVIGATION BAR-->

<div style="width:100%;float:left;padding:0px 15px;">
<br>
<h5>Change Secret Key</h5>
<hr>
<small class="mr-auto">Welcome <i class="text-primary"><?php echo $_SESSION['name']; ?></i> Signed in as <i class="text-primary"><?php echo $_SESSION['email']; ?></i></small><br><br>
<a href="dash.php"><button class="btn btn-info"><i class="fa fa-arrow-left"></i> Back</button></a><br><br>

<form method="POST" action="changeskey.php">
<label for="nskey">Enter the New Secret Key:</label><br>
<input class="form-control" type="text" placeholder="Enter the New Secret Key" name="nskey"><br>
<input type="submit" class="btn btn-primary" value="Submit" name="nskey_btn">
</form> 
<br>
<ul class="list-group">
<li class="list-group-item active">Existing Secret Key</li>
<li class="list-group-item list-group-item-action">
<?php
        //if (isset($_POST['keyset_btn'])) {
        //$secretkey = mysqli_real_escape_string($db, $_POST['email']); 
        //$myfile = fopen("key.ini", "w");
        echo $ini2['scode'];    
?>
</li>
</ul>

<br><br>
</div>
<?php
if (isset($_POST['nskey_btn'])) {
    $nskey = mysqli_real_escape_string($db, $_POST['nskey']);
    $myfile = fopen("key.ini", "w");
    fwrite($myfile, "");
    $deftxt='scode = ';
    $finaltxt = $deftxt . $nskey;
    fwrite($myfile,$finaltxt);
    header('location: dash.php?keyupdate=success');
}
?>
<div style="float:left;height:35vh;width:100%;"><br></div>
</html>