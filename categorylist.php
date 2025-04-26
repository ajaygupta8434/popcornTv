<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>
<div class="container">
    <div class="head">
        <h1  style="text-align: center; padding-top:10px; padding-bottom:-10px;"> Category of Popcorn Tv </h1>
    </div>
    <a class="btn btn-warning  text-light" href="addcategory.php">Add a category</a>
    <hr>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">categary_name</th>
      <th scope="col">No. of Post</th>
      <th scope="col">CURD</th>
    </tr>
  </thead>

  <?php
 $query="SELECT * FROM categary";
 $run=mysqli_query($con,$query);
 if($run){
    while($row =mysqli_fetch_assoc($run)){
       ?>
   

  <tbody>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['categary_name'] ?></td>

      <?php
  $id= $row['id'];
  $query1 = "SELECT COUNT(*) AS total1 
  FROM movie 
  JOIN categary ON categary.id = movie.cat_id 
  WHERE categary.id = $id";
   $run1=mysqli_query($con,$query1);
 if($run1){  
  while($row1 =mysqli_fetch_assoc($run1)){
   
   
   ?>
    <td><?php echo $row1['total1'] ?></td>
    <?php
   }
  }


      ?>
      
      <td>
        <a class="btn btn-danger" href="deletecategary.php?id=<?php echo$row['id']?>">Delete </a>
       <a class="btn btn-outline-primary" href="editcategory.php?id=<?php echo $row['id'];?>&cname=
       <?php echo$row['categary_name'];?>"> Edit </a></td>
    </tr>
   
  </tbody>
  <?php
 
}
}
?>
</table>
</div>