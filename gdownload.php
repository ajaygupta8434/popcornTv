<?php
include 'header2.php';
include 'ft.php';
?>
<?php
 if(isset($_GET['id'])){
  $id=$_GET['id'];
  foreach($_GET as $key => $id){
    $dec=$_get[$key] = base64_decode(urldecode($id));
    $uncal=((($dec*72222)/321)/73333);
      
$query=" SELECT * FROM `genere` WHERE id=$uncal";
$run= mysqli_query($con,$query);
if($run){
    while($row= mysqli_fetch_assoc($run)){
        echo $row['mv_name'];
    }
}

  }
 

 }
 else{
    echo"404 error";
 }
?>

