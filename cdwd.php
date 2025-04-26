<?php
include 'header2.php';
include 'ft.php';
?>

<style>
html {
    scroll-behavior: smooth;
}
</style>

<?php
if (isset($_GET['mv_name'])) {
    // Sanitize input
    $mv_name = mysqli_real_escape_string($con, $_GET['mv_name']);

    $query = "SELECT * FROM `movie` WHERE mv_name = '$mv_name'";
    $run = mysqli_query($con, $query);

    if ($run && mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_assoc($run)) {
            
            ?>
            <div class="container text-center">
                <div>
                    <h1>Download movie - <b><?php echo htmlspecialchars($row['mv_name']); ?></b></h1>
                </div>
                <div class="img">
                    <img src="thumb/<?php echo htmlspecialchars($row['img']); ?>" height='300px' width='250px' style="max-width:100%">
                </div>
                <br>
                <div id="but">
                    <a href="#download" onclick="myfun()" class="btn" style="background-color: #726297; color: #fff">Download</a>
                </div>
                <div class="container">
                    <h2><?php echo htmlspecialchars($row['mv_name']); ?></h2>
                    <p><?php echo htmlspecialchars($row['mv_des']); ?></p>
                </div>
                <div id="download" style="display: none;">
                    <a href="<?php echo htmlspecialchars($row['link1']); ?>">Download1</a>
                    <a href="<?php echo htmlspecialchars($row['link2']); ?>">Download2</a>
                </div>
            </div>

            <script>
                function myfun() {
                    document.getElementById('download').style.display = 'block';
                    document.getElementById('but').style.display = 'none';
                }
            </script>
            <?php
        }
    } else {
        echo "<p style='text-align:center; color:red;'>No movie found with name: <b>" . htmlspecialchars($mv_name) . "</b></p>";
    }
} else {
    echo "<p style='text-align:center; color:red;'>Wrong or missing parameter. 404</p>";
}
?>
