<?php
include 'header.php';
include 'ft.php';
include 'db.php';
?>
<div class="container">
    <div class="head"  style="padding-top:10px; padding-bottom:-10px;">
        <h1 style="text-align: center;"> Admins of Popcorn Tv </h1>
        
    </div>
<table class="table">
  <thead>
  
    <tr >
    <th scope="col">#</th>
    <th scope="col">Username</th>
    <th scope="col">Password</th>
    <th scope="col">CURD</th>
      </tr>
  </thead>
  <?php
    $query="SELECT * from admin";
    $run=mysqli_query($con,$query);
    if($run)
    {
        while($row = mysqli_fetch_assoc($run)){
         
  ?>
  <tbody>
    <tr>
    <th scope="row"><?php  echo $row['id']; ?></th>
      <td><?php  echo $row['uname']; ?></td>
      <td>password Encrypted</td>
      <td ><a class="btn btn-danger" href="deleteadmin.php?id=<?php echo $row['id'];?>">delete</a> <a class="btn btn-success" href="registeradmin.php">New user</a></td>
    </tr>
<?php
}
}
?>
  </tbody>
</table>
</div>