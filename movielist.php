<?php

include'db.php';
include'header.php';
include'ft.php';
?>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Movie on Popcorn Tv</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
          <a class="btn btn-warning text-light" href="addmovie.php">Add a movie</a>
        </li>
</ul>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">

      <form class="form-inline" action="searchmovie.php" method="post">
    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search">
    <button class="btn btn-success" name="submit" type="submit">Search</button>
  </form>

      </ul>
    </div>
  </div>
</nav>
</div>


<div class="container">

<div class="row">
  
  <?php
  $query="SELECT * FROM `movie`";
  $run = mysqli_query($con,$query);
    if($run){
       while($row = mysqli_fetch_assoc($run)){
      
      ?>
    
        <div class="col" style=" width: 300ppx; text-align:center;">
            <div class="card " style=" width:300px;" >
                  <?php echo "<img height='180px' width='300px'src='../thumb/" . $row['img'] . "'>"; ?>
                    <div class="card-body">    
                      <h4 class="card-title"><?php  echo $row['mv_name'];?></h4>
                       <p class="card-text"><?php  echo $row['meta_decription'];?></p>
                      <a href="viewmovie.php?id=<?php  echo $row['id'];?>" class="btn btn-primary">View Details</a>
                     
                  </div>
             </div>
        </div>
      
                    <?php   
                       }
                        }
                    ?>
</div>
</div>





