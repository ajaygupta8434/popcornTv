<?php
include'ft.php';
?>
<div class="sidebar">
  <div class="container" style="text-align:right">
    <form action="search.php" method="post">
    <input type="text" name="search" placeholder="Search movie" class="form-control" >
    <button type="submit" name="submit" class="btn btn-outline-danger">Submit</button> 
    </form>
  
  </div>
  
  <div class="container">
    <div class="latestpost" id="lp"><?php
      $query0="SELECT * from `movie` ORDER BY mv_name DESC limit 5";
      $run=mysqli_query($con,$query0);
      if($run){
        while($row0 = mysqli_fetch_assoc($run)){
          ?>
           <ul>
           <li>
            <a href="" id="a"><?php echo $row0['mv_name'];?> </a>
        </li>
        </ul>
   <?php 
       }
      }
    ?>
      </div>
  </div>
  <div class="ads" style="text-align:center;">
    <h1> Ads</h1>
  </div>

</div>