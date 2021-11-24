<!--Start header-->
<?php
include('./dbConnection.php');
include('./mainInclude/header.php');

?>
<!--end header-->

<!--start courses banner-->    
<div class="course">
    <div class="courseimg">
        <img src="./image/courseimg.jpg" alt="courses" style="height:43em; margin-left:23em; width:40em;"/>
    </div>
    <div class="coursecontent">
        <h1>Learn Calligraphy</h1>
        <p>We've Handpicked The Tools And Fine-Tuned the Curriculum</p>
    </div>
</div>
<!--end courses banner--> 
 <!--Start Courses-->
<!--cards -->
<div class="container mt-5">
  <h1 class="text-center">Popular Courses</h1>
  <!--1st course card deck-->
  <div class="row mt-4">
    <?php 
      $sql = "SELECT * FROM course";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $course_id = $row['course_id'];
          echo '
          <div class="col-sm-4 mb-4">
          <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px;">
  
    <div class="card" style=" width :17rem; height: 22rem;">
      <img src="'. str_replace('..','.',$row['course_img']). '" class="card-img-top" alt="Calligraphy for beginners"/>
      <div class="card-body">
        <h5 class="card-title">'.$row['course_name'].'</h5>
        <p class="card-text">'.$row['course_desc']. '</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_org_price']. '</del></small>
        <span class="font-weight-bolder">&#8377 '.$row['course_price']. '</span></p>
        <a class="btn btn-danger text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
      </div>
    </div>
    </a>
    </div>
     ';
        }
      }

      ?>
   
  </div>
  <!--End 1st course card deck-->
  
    </div>
 
<!--Start Contact Us-->
<?php
include('./contact.php');
?>
<!--end Contact Us-->

<!--Start footer-->  
<?php
include('./mainInclude/footer.php');
?>

<!--end footer-->