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
<h5>New Blog Post</h5>
<hr>
<small class="mr-auto">Welcome <i class="text-primary"><?php echo $_SESSION['name']; ?></i> Signed in as <i class="text-primary"><?php echo $_SESSION['email']; ?></i></small><br><br>
<a href="dash.php"><button class="btn btn-info"><i class="fa fa-arrow-left"></i> Back</button></a><br><br>
<form method="POST" action="newpost.php">
  <label for="title">Title:</label><br>
  <input type="text" name="title" placeholder="Enter your blog title" size="80" class="form-control"><br>
  
  <label for="subtitle">Subtitle:</label><br>
  <input type="text" name="subtitle" placeholder="Enter your blog Subtitle" size="80" class="form-control"><br>
  
  <label for="img">Image Link:</label><br>
  <input type="text" name="img" placeholder="Enter the Image Link" size="80" class="form-control"><br>
  
  <label for="editor">Content:</label>
  <textarea name="editor" id="editor" rows="40" cols="80" class="form-control" placeholder="Your Content goes here...">
  </textarea><br>

  <label for="sources">Sources:</label><br>
  <input type="text" name="sources" placeholder="Enter the sources you referred" size="80" class="form-control"><br>
  
  <label for="tags">Tags:</label><br>
  <input type="text" name="tags" placeholder="Enter the Tags" size="80" class="form-control"><br>

  <label for="pgofblog">Page of Blog:</label><br>
  <input type="text" name="pgofblog" placeholder="Enter the Page of Blog" size="80" class="form-control"><br>

  <label for="links">Links:</label><br>
  <input type="text" name="links" placeholder="Enter the links for referrence" size="80" class="form-control"><br>

  <input class="btn btn-primary" type="submit" name="addblog_btn" value="Submit">
</form>
</div>
<div style="width:15%;float:left;"><br></div>

<!--SCRIPTS-->
<script type="text/javascript">
tinymce.init({
    selector: '#editor'
});
</script>
</html> 