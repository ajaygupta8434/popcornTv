
<?php
session_start();
include 'ft.php';
include 'db.php';
?>
<head> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>   
</head>
<div class="container">
    <div class="head"  style="text-align: center;">
        <h1>Sign Up to PopcornTv</h1>
    </div>
    <form action="registeradmin.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="uname" class="form-control" id="exampleInputEmail1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" required>
        </div>
        <a class="btn btn-outline-primary" href="login.php"> Sign In </a>  
        <button type="submit" name="submit" class="btn btn-info">Sign Up</button>
     
    </form>
</div><?php
if (isset($_POST['submit'])) {
    $user = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $hash = password_hash($pwd, PASSWORD_BCRYPT);

    $query = "INSERT INTO `admin`(`uname`, `pwd`) VALUES ('$user', '$hash')";
    $run = mysqli_query($con, $query);

    if ($run) {
        $_SESSION['login_successful'] = 1;
        $_SESSION['user'] = $user;
        echo "<script>alert('Your account has been created'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again!');</script>";
    }
}


           ?> 