
<?php

session_start();
if(isset( $_SESSION['login_successful'] )){}
else{
    echo"<script>alert('You are not login !'); window.location.href='login.php';</script>";
    
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin-popcorn TV</title>
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #140d14;
  color: white;
}

.container {
  margin-left: 200px;
  padding: 20px;
 
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  .container {margin-left: 0;}
}

@media screen and (max-width: 480px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>

  </head>
<body>

<!-- navbar-->
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hello <?php echo  $_SESSION['user'];?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">  
        <li class="nav-item">
          <a class="btn btn-outline-danger" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="sidebar">
<a class="active" href="index.php">Home</a>
  <a class="nav-link" href="adminlist.php">Admin list</a>
  <a class="nav-link" href="generlist.php">Genre </a>
  <a class="nav-link" href="categorylist.php">Category </a>
  <a class="nav-link" href="movielist.php">Movie</a>
  <a href="#contact"  data-toggle="modal" data-target="#exampleModal">Contact</a>
  <a href="#about">About</a>
</div>
<!-- navbar End-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal"
          aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <form action="valicontact.php" method="post">
          <input type="text" required name="username" placeholder="enter your name" class="form-control">
          <br>
          <input type="email" required name="email" placeholder="enter your email" class="form-control">
          <br>
          <input type="text" required name="msg" placeholder="enter your massage" class="form-control">
          <br>
          <button type="submit"  name="csub"class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
          data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
