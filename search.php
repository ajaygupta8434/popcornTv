<?php
include 'header2.php';
include 'sidebar.php';
include 'ft.php';

?>
<div class="content">
<div class="row">
<?php
if(isset($_POST['submit'])){
    $input =$_POST['search'];
    $search = preg_replace("#[^0-9a-z]#i","",$input);
    $query="SELECT * FROM movie where mv_name LIKE '%$search%' OR lang LIKE '%$search%' OR mv_tag LIKE '%$search%'";
   $run = mysqli_query($con,$query);
   $count = mysqli_num_rows($run);
   if($run){
    $count= mysqli_num_rows($run);
    if($count == 0){
        echo"No result found !";
    }
    else {
        while ($row = mysqli_fetch_assoc($run)) {

            ?>
            <div class="card" style="width: 300px; height:450px; margin-left:20px;text-align:center ">
  <img class="card-img-top" height="250px" width="100px" src="thumb/<?php echo $row['img']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['mv_name'];?></h5>
    <p class="card-text"><?php echo $row['date'];?></p>
    <p class="card-text"><?php echo $row['director'];?></p>
    <?php
    $id=$row['id'];


$url="download.php?id=";
    ?>
    <a href="<?php echo $url.$id; ?>" class="btn btn-" style="background-color:#726297;color:#fff">Download</a>

  </div>
</div>
        
        <?php
        }
   }
}
else{
    echo"Query Failde ";

}}
else
{
    echo"movie not found";
}

?>
</div>
</div>