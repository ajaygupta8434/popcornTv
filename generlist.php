<?php

include'db.php';
include'header.php';
include'ft.php';
?>
<div class="container">
    <div class="head">
        <h1>Genre of PopcornTv</h1>
    </div>
    <a class="btn btn-warning text-light" href="addgener.php">Add a Genre </a>
    <hr>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Genre_name</th>
      <th scope="col">CURD</th>
    </tr>
  </thead>
  <tbody>
    <?php
   $query="SELECT * FROM `genere`";
   $run=mysqli_query($con,$query);
 if($run){
    while($row =mysqli_fetch_assoc($run)){
       
      ?>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['genere_name'] ?></td>
      <td>
        <a class="btn btn-danger" href="deletegenre.php?id=<?php echo$row['id']?>">Delete </a>
       <a class="btn btn-outline-primary" href="editgenre.php?id=<?php echo $row['id'];?>&genrename=<?php echo $row['genere_name'];?>s"> Edit </a>
      </td>
    </tr>
   
  </tbody>

  <?php
}
}
?>
</table>
</div>