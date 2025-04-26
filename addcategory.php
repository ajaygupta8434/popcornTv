<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>
<div class="container">
    <div class="head">
        
        <div class="jumbotron">
  <h1 class="display-4"><h1>Add a Cotegory </h1></h1>
  <p class="lead">Add category and also please mention their Category_id</p>
  <hr class="my-4">
  <form action="addcategory.php" method="post">
  <div class="form-row">
    <div class="col-7">
      <input type="text" name="catname" class="form-control" placeholder="Category Name">
    </div>

  </div>
  <br><br>
  <button class="btn btn-primary btn-lg"  name="submit" href="#" role="button">Add category </button>
</form>
</div>
    </div>
</div>


<?php
// Assuming database connection is established and stored in $con

if (isset($_POST['submit'])) {
    // Escape user inputs to prevent SQL injection
    $catname = mysqli_real_escape_string($con, $_POST['catname']);
    $catid = mysqli_real_escape_string($con, $_POST['catid']);

    // Corrected query - removed the extra comma before VALUES
    $query = "INSERT INTO `categary` ( `categary_name`) VALUES ( '$catname')";

    $run = mysqli_query($con, $query);

    if ($run) {
        echo "<script>alert('Category successfully Added _ _!'); window.location.href='categorylist.php';</script>";
    } else {
        echo "<script>alert('There was A problem while Adding Category '); window.location.href='addcategory.php';</script>";
    }
}
?>
