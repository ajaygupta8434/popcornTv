<?php
include 'db.php';
$id = $_GET['id'];
$query = "DELETE FROM  `contactus` WHERE id=$id";
$run = mysqli_query($con, $query);
if($run){
    echo  "<script>alert('Contact Information deleted '); window.location.href='contact.php';</script>";
 
}
else{
    echo  "<script>alert('There was A problem while Deleting Contact '); window.location.href='contact.php';</script>";
}
?>