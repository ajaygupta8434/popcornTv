<?php
include 'header2.php';
include 'sidebar.php';
include 'ft.php';
?>
<div class="content">
<div class="row">
<?php

if(isset($_GET['id'])){
    $id=$_GET['id'];
    foreach($_GET as $key => $id){
   $data= $_GET [$key] = base64_decode(urldecode($id));
   $dec1=((($data*7)/3)/7);
   
   $query = "SELECT * FROM `movie`, `genere` WHERE `genere`.id = `movie`.genre_id AND `genere`.id = $dec1";

   
   $run = mysqli_query($con,$query);
   if(mysqli_num_rows($run)>0){
   while($row=mysqli_fetch_assoc($run)){
    
    ?>
    
<div class="card" style="width: 300px; height:500px; margin-left:20px;text-align:center ">
  <img class="card-img-top" height="250px" width="100px" src="thumb/<?php echo $row['img']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['mv_name'];?></h5>
    <p class="card-text"><?php echo $row['date'];?></p>
    <p class="card-text"><?php echo $row['director'];?></p>
    <?php
    $mv_name=$row['mv_name'];
    echo  $mv_name;
$url="cdwd.php?mv_name=";
    ?>
    <br>
    <a href="<?php echo $url.$mv_name; ?>" class="btn btn-" >Download</a>
  </div>
</div>

   <?php
   }
   }
   else{
    echo "No Found";
   }
    }
}
?>
</div>
</div>