<?php

include'db.php';
include'header.php';
include'ft.php';
?>
<div class="row">
<?php
   
if (isset($_POST['submit'])) {
    $search = $_POST['search'];
    $search_clean = preg_replace("#[^0-9a-zA-Z ]#i", "", $search); // allow spaces too
    $search_clean = mysqli_real_escape_string($con, $search_clean); // prevent SQL injection

    $query = "SELECT * FROM movie 
              WHERE mv_name LIKE '%$search_clean%' 
              OR mv_tag LIKE '%$search_clean%' 
              OR lang LIKE '%$search_clean%' 
              OR director LIKE '%$search_clean%' 
              OR date LIKE '%$search_clean%'";

    $run = mysqli_query($con, $query);

    if (mysqli_num_rows($run) == 0) {
        echo "<h1>No movie found!!</h1>";
    } else {
        while ($row = mysqli_fetch_assoc($run)) {
            ?>
            <div class="col">
            
            <a href="viewmovie.php?id=<?php  echo $row['id'];?>"> <?php echo "<img height='180px' width='auto'src='../thumb/" . $row['img'] . "'>"; ?></a>
        <?php  echo "<h3>" . htmlspecialchars($row['mv_name']) . "</h3>";?>
        </div>
        
           <?php
        }
    }
}
?>
</div>