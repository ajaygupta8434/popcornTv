<?php

include'db.php';
include'header.php';
include'ft.php';
?>
<div class="container">
    <div class="jumbotron">
    <form action="valinewpost.php" method="post" enctype="multipart/form-data">


  <div class="form-group"> 
    <input type="text"name="mv_name" class="form-control" placeholder="Enter Movie Name">
  </div>

  <div class="form-group">
    <input type="text" name="mv_m_desc" class="form-control" placeholder="Enter meta Decription" >
  </div>

  <div class="form-group">
    <input type="text" name="mv_m_tag" class="form-control" placeholder="Enter meta Tags" >
  </div>

  <div class="form-group">
    <input type="text" name="mv_link1" class="form-control" placeholder="Enter link1" >
  </div>

  <div class="form-group">
    <input type="text" name="mv_link2"class="form-control" placeholder="Enter link2" >
  </div>

  <div class="form-group">
    <input type="date" name="mv_date" class="form-control" placeholder="Enter  Date" >
  </div>

  <div class="form-group">
    <input type="text"name="mv_lang" class="form-control" placeholder="Enter movie language" >
  </div>

  <div class="form-group">
    <input type="text"name="mv_director" class="form-control" placeholder="Enter movie director" >
  </div>
  <div class="form-group">
    <input type="text"name="cat_id" class="form-control" placeholder="Enter Category_Id" >
  </div>

  <div class="form-group">
    <input type="text"name="genre_id" class="form-control" placeholder="Enter Genre Id" >
  </div>
  <h6>select thumbnail image</h6>
  <div class="custom-file">
  
    <input type="file" name="img" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div>
 
<br>
<br>
<br>
  <div class="form-group">
    <textarea type="text" name="mv_desc" class="form-control" placeholder="Enter movie Decription" rows="4" ></textarea>
  </div>

 



 

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>