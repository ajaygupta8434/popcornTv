<?php

include'db.php';
include'header.php';
include'ft.php';
?>
<div class="container">
    <div class="head">
        
        <div class="jumbotron">
  <h1 class="display-4"><h1>Add a Genre </h1></h1>
  <p class="lead">Add Genre and also please mention their Category_id</p>
  <hr class="my-4">
  <form action="addgener.php" method="post">
  <div class="form-row">
    <div class="col-7">
      <input type="text" name="genrename" class="form-control" placeholder="Genre Name">
    </div>
    
  </div>
  <br><br>
  <button class="btn btn-primary btn-lg"  name="submit" href="#" role="button">Add Genre </button>
</form>
</div>
    </div>
</div>

<?php
if(isset($_POST['submit'])){
  $genname = mysqli_real_escape_string($con, $_POST['genrename']);
    $query="INSERT INTO `genere`(`genere_name`) VALUES ('$genname')";
    $run = mysqli_query($con,$query);
    if($run){
        echo "<script>alert('Genre successfully Added _ _!'); window.location.href='generlist.php';</script>";
    }
    else{
        echo "<script>alert('There was  problem while Adding Category '); window.location.href='addgener.php';</script>";
    }
}
?>