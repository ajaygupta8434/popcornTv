<?php

include'db.php';
include'header.php';
include'ft.php';

if(isset($_GET['id'])){
    $id= $_GET['id'];

    $query="SELECT * FROM movie where id=$id";
    $run=mysqli_query($con,$query);
    if($run){
        while($row=mysqli_fetch_assoc($run)){
        ?>

      <div class="container">
        <div class="row">
             <div class="col">
                <div >
                <?php echo "<img height='400px' width='auto'src='../thumb/" . $row['img'] . "'>"; ?>
                </div>
            </div>

            <div class="col">
                <h1 style="text-align:center;"><?php  echo $row['mv_name'];?></h1>
                <p><?php  echo $row['mv_des'];?></p>
                   <div class="date">
                   <pre><?php  echo $row['date'];?></pre>
                   <pre><?php  echo $row['director'];?></pre>
                   <pre><?php  echo $row['lang'];?></pre>
                   </div>
         </div>
            
      </div>
              <br><br><br>
     <div>
        <div>
            <a class="btn btn-info" href="<?php  echo $row['link1'];?>">Download1</a>
            <a class="btn btn-success" href="<?php  echo $row['link2'];?>">Download2</a>
        </div>
                <?php  echo $row['meta_decription'];?>
                <div class="jumbotron">
                    <?php  echo $row['mv_tag'];?>
                </div>
    </div>
      </div>

<?php
        }
    }
}
?>