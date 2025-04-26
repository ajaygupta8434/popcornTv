<?php

include'db.php';
include'header.php';
include'ft.php';
?>
<div class="container">
    <center><h1> contact List</h1></center>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#/th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Massage</th>
      <th scope="col">Complete</th>
    </tr>
  </thead>
  <tbody>
  <?php
$query = "SELECT * FROM contactus";
$run = mysqli_query($con, $query);

if ($run && mysqli_num_rows($run) > 0) {
    while ($row = mysqli_fetch_assoc($run)) {
        ?>
        <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php echo $row['uname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['massage']; ?></td>
            <td><a class="btn btn-danger" href="comp.php?id=<?php echo$row['id']?>">Complete </a></td>
        </tr>
        <?php
    }
}
?>

  </tbody>

</table>
</div>
