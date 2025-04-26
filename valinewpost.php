<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $mv_name      = $_POST['mv_name'] ?? '';
    $mv_m_desc    = $_POST['mv_m_desc'] ?? '';
    $mv_m_tag     = $_POST['mv_m_tag'] ?? '';
    $mv_link1     = $_POST['mv_link1'] ?? '';
    $mv_link2     = $_POST['mv_link2'] ?? '';
    $mv_lang      = $_POST['mv_lang'] ?? '';
    $cat_id       = $_POST['cat_id'] ?? '';
    $genre_id     = $_POST['genre_id'] ?? '';
    $mv_desc      = $_POST['mv_desc'] ?? '';
    $mv_director  = $_POST['mv_director'] ?? '';
    $date         = date('Y-m-d', strtotime($_POST['mv_date'] ?? 'now'));

    // File upload variables
    $img          = $_FILES['img']['name'];


    // Check if the directories exist, create them if not
    $thumb_dir = "thumb/";

    if (!is_dir($thumb_dir)) {
        mkdir($thumb_dir, 0777, true); // Create thumb/ directory
    }

   

    // Validate file input before moving
    if (!empty($img)) {
        $img_target   = $thumb_dir . basename($img);   // Save to thumb/
    

        // Move files to folders
        $img_uploaded = move_uploaded_file($_FILES['img']['tmp_name'], $img_target);
        

        if ($img_uploaded) {
            // Insert into database after successful upload
            $query = "INSERT INTO `movie` 
                (`cat_id`, `genre_id`, `mv_name`, `mv_des`, `mv_tag`, `link1`, `link2`, `img`, `date`, `lang`, `director`, `meta_decription`) 
                VALUES 
                ('$cat_id', '$genre_id', '$mv_name', '$mv_desc', '$mv_m_tag', '$mv_link1', '$mv_link2', '$img', '$date', '$mv_lang', '$mv_director', '$mv_m_desc')";

            $run = mysqli_query($con, $query);

            if ($run) {
                echo "✅ Movie uploaded and saved in database!";
            } else {
                echo "❌ Database insert error: " . mysqli_error($con);
            }
        } else {
            echo "❌ File upload failed.";
        }
    } else {
        echo "❌ Please upload both image and video files.";
    }
}
?>
