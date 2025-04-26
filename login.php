
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
        <h1>Login to PopcornTv (Admin)</h1>
    </div>
    <form action="login.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="uname" class="form-control" id="exampleInputEmail1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" required>
        </div>
       
        <button type="submit" name="submit" class="btn btn-info">Sign In</button>
     <a class="btn btn-outline-primary" href="registeradmin.php"> Sign Up </a>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $user = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $query = "SELECT * FROM admin WHERE uname='$user'";
    $run = mysqli_query($con, $query);
    if (mysqli_num_rows($run)>0 ){

        while($row = mysqli_fetch_assoc($run)){
            if(password_verify($pwd,$row['pwd']))
            {
                $_SESSION['login_successful'] = 1; 
                $_SESSION['user'] = $user;
              echo "<script>alert('Logged in'); window.location.href='index.php';</script>";
            }
        }
            
    } else {
        echo "<script>alert('Wrong username or password');</script>";
    }
}
?>


            