<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>
<?php
   if(isset($_GET['id'])){
    $id = $_GET['id'];
    $genrename = $_GET['genrename'];
    $catid = $_GET['catid'];
    $genid = $_GET['genid'];

     if(isset($_POST['submit'])){
      $genrename1 = $_POST['genrename'];
      $cat_id = $_POST['cat_id'];
      $genreid1 = $_POST['genre_id'];

      $query ="UPDATE `genere` SET `genere_name` = '$genrename1', `categary_name` = '$catid', `genere_id` = '$genreid1' WHERE `genere`.`id` = $id;";
      $run=  mysqli_query($con,$query);
      if($run){
        echo "<script>alert('Genre successfully Updated_ _!'); window.location.href='generlist.php';</script>";
      }
      else{
        echo "<script>alert('There was A problem while Updating Genre '); window.location.href='generlist.php';</script>";
      }
     }
   } 
   
   else{
    header('location:generlist');
   }


?>
<div class="container">
    <div class="head">
        
        <div class="jumbotron">
  <h1 class="display-4"><h1>Update a Genre </h1></h1>
  <p class="lead">Update Genre and also please mention their Category_id</p>
  <hr class="my-4">
  <form action="#" method="post">
  <div class="form-row">
    <div class="col-7">
      <input type="text" value="<?php echo$genrename ?>" name="genrename" class="form-control" placeholder="Genre Name">
    </div>
    <div class="col">
      <input type="text" value="<?php echo$catid ?>" name="cat_id" class="form-control" placeholder="Category Id">
    </div>
    <div class="col">
      <input type="text"value="<?php echo$genid ?>" name="genre_id" class="form-control" placeholder="Genre Id">
    </div>
  </div>
  <br><br>
  <button class="btn btn-primary btn-lg"  name="submit" href="#" role="button">Add Genre </button>
</form>
</div>
    </div>
</div>

