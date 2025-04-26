<?php
include 'db.php';
$id = $_GET['id'];
$query = "DELETE FROM `categary` WHERE id=$id";
$run = mysqli_query($con, $query);
if($run){
    header('location:categorylist.php');
}
else{
    echo  "<script>alert('There was A problem while Adding Category '); window.location.href='categorylist.php';</script>";
}
?>