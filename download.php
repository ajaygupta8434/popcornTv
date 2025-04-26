<?php
include 'header2.php';
include 'ft.php'; 

?>
<style>
html{
    scroll-behavior:smooth;
}
    </style>
<?php
if(isset($_GET['id'])){
   $id = $_GET['id'];
  
      
    $uncal =((($id*7)/3)/7);
    $query = "SELECT * FROM `movie` WHERE id=$id ";
    $run = mysqli_query($con,$query);
    if($run){
        while($row = mysqli_fetch_assoc($run)){
        ?>

          <div class="container text-center" style="color:#fff">
            <div class="" >
            <h1 >Download movie - <b><?php echo$row['mv_name'];?></b></h1>
        </div>  
          <div class="img">
            <img src="thumb/<?php echo$row['img']; ?>" height='300px' width='250px' style="max-width:100%">
          </div>
          <br>
          <div id="but">
          <a href="#download" onclick="myfun()" class="btn btn-" style="background-color :#726297;color:#fff">Download</a>
        </div> <div class="container">
            <h2> <?php echo $row['mv_name'];?></h2>
            <p> <?php echo $row['mv_des'];?> </p>
          </div>
          <div id="download" style="display:none;">
            <a href="<?php echo $row['link1']; ?>">Download1</a>
            <a href="<?php echo $row['link2']; ?>">Download2</a>
        </div>
        </div>
       <script>
    function myfun(show,hide){
       document.getElementById('download').style.display='block';
       document.getElementById('but').style.display='none';
    }
        </script>
        <?php
        }
    }
   }
  


else{
    echo"worng 404";
}
?>
