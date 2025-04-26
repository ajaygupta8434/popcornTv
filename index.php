<?php

include'db.php';
include'header.php';
include'ft.php';
?>
<div class="container" style="display : block">
<div class="row">
  <div class="col-sm-6">
    <div class="card bg-info" style="border:1px solid #ccc;">
      <div class="card-body" style="text-align:center">
        <h5 class="card-title">Total No of Post </h5>
        <p class="card-text"><?php
        $query = "SELECT count(*) as total_movie from movie";
        $run = mysqli_query($con,$query);
        if($run){
            while($row = mysqli_fetch_assoc($run)){
                echo $row['total_movie'];
            }
        }
        ?>
        </p>
      </div>
    </div>
  </div>


  <div class="col-sm-6">
    <div class="card bg-success" style="border:1px solid #ccc;">
      <div class="card-body" style="text-align:center">
        <h5 class="card-title">Total No of Category </h5>
        <p class="card-text"><?php
        $query = "SELECT count(*) as total_category from categary";
        $run = mysqli_query($con,$query);
        if($run){
            while($row = mysqli_fetch_assoc($run)){
                echo $row['total_category'];
            }
        }
        ?>
        </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card bg-secondary" style="border:1px solid #ccc;">
      <div class="card-body" style="text-align:center">
        <h5 class="card-title">Total No of Admin </h5>
        <p class="card-text"><?php
        $query = "SELECT count(*) as total_admin from admin";
        $run = mysqli_query($con,$query);
        if($run){
            while($row = mysqli_fetch_assoc($run)){
                echo $row['total_admin'];
            }
        }
        ?>
        </p>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card" style="border:1px solid #ccc; background-color:#99ad5a">
      <div class="card-body" style="text-align:center">
        <h5 class="card-title">Total No of genre </h5>
        <p class="card-text"><?php
        $query = "SELECT count(*) as total_genre from genere";
        $run = mysqli_query($con,$query);
        if($run){
            while($row = mysqli_fetch_assoc($run)){
                echo $row['total_genre'];
            }
        }
        ?>
        </p>
      </div>
    </div>
  </div>

   
</div>
</div>

    


