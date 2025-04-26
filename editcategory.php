<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>

<?php
if(isset($_GET['id'])){
  $id= $_GET['id'];
  $catname = $_GET['cname'];
  $fk= $_GET['forkey'];
  if(isset($_POST['submit'])){
   $cname= $_POST['categoryname'];
   $frky= $_POST['frky'];
   $pid= $_POST['pid'];

   $query="UPDATE `categary` SET `id`='$pid',`categary_id`=$frky,`categary_name`='$cname' WHERE id=$id";
   $run=mysqli_query($con,$query);
   if($run){
    echo "<script>alert('Category successfully Updated_ _!'); window.location.href='categorylist.php';</script>";
   }
   else{
    echo "<script>alert('There was A problem while Updating Category '); window.location.href='categorylist.php';</script>";
  
   }
  }

}
else{
  header('location:categorylist.php');
}
?>
<div class="container">
    <div class="head" >
        <h1 style="text-align: center;">Edit Category<h1>
    </div>
    <form action="#" method="post">
  <div class="form-row">
    <div class="col-7">
      <small>Category Name </small>
      <input type="text" class="form-control" name="categoryname"  value="<?php echo$catname ?>" placeholder="Category Name">
    </div>
    <div class="col">
    <small>Forgien Key </small>
      <input type="text" class="form-control" name="frky" value="<?php echo$fk ?>" placeholder="Forgien Key">
    </div>
    <div class="col">
    <small>Primary ID </small>
      <input type="text" class="form-control" name="pid" value="<?php echo$id ?>" placeholder="Primary ID">
    </div>
  </div>
  <br><br>
  <input type="submit" class="btn btn-outline-success btn-lg" name="submit">
</form>
</div>
