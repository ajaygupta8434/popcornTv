
<div class="topnav" id="myTopnav">
  <a href="#home" class="active">Category</a>
  <?php
    $q1="SELECT * from `categary`";
    $run = mysqli_query($con,$q1);
    if($run){
      while($row = mysqli_fetch_assoc($run)){
        ?>
    <?php
 
$id=$row['id'];
$enc1=(($id*123456789*54321)/956783);
$url="category.php?id=".urldecode(base64_encode($enc1));

    ?>
  <a href="<?php echo $url; ?>"> <?php echo $row['categary_name'];  ?></a>
  <?php
      }
    }
  ?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<?php
    $q2="SELECT * from `movie` ORDER BY mv_name DESC limit 1";
    $r2 = mysqli_query($con,$q2);
    if($r2){
      while($ro = mysqli_fetch_assoc($r2)){
         ?>
        
    
<marquee style="background-color:#1a1c20;" onmouseover="this.stop();" onmouseout="this.start();"> <a class="nav-link" href="<?php echo $url.$id; ?>"> <?php echo $ro['mv_name'];?></a></marquee>
<?php
}
    }
  ?>


<!-- Genre -->
<div class="topnav1" id="myTopnav">
  <a href="#home" class="active">Genre</a>
  <?php
    $q1="SELECT * from `genere`";
    $run = mysqli_query($con,$q1);
    if($run){
      while($rows = mysqli_fetch_assoc($run)){
        ?>
        <?php
 
 $id=$rows['id'];
 $enc1=(($id*7*3)/7);

 $url="genre.php?id=".urldecode(base64_encode($enc1));
 
     ?>
     <a href="<?php echo $url; ?>"> <?php echo $rows['genere_name'];  ?></a>
         
  
  <?php
      }
    }
  ?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>