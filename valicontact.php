<?php
include 'header2.php';
include 'ft.php';

if(isset($_POST['csub'])){
  $name = $_POST['username'];
  $email = $_POST['email'];
  $msg= $_POST['msg'];
  $query="INSERT INTO `contactus`( `uname`, `email`, `massage`) VALUES
   ('$name','$email','$msg')";
   $run = mysqli_query($con,$query);
   if($run){
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script> window.location.href='index.php';
        Swal.fire({
            title: 'Request Submitted',
            text: 'We will review your request and work on it.',
            icon: 'success'
        }).then(() => {
            window.location.href = 'index.php';
        });
    </script>
    ";
}

   else{
    echo"<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>window.location.href='index.php';
  Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!'
}); </script>";
   }
}
?>