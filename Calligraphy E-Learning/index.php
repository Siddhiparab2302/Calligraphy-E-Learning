<?php
include('./mainInclude/header.php');
include('./dbConnection.php');
?>

 <!--Start background-->
 <div class="image">
    <div class="img">
        <img src="image/bg1.jpg" style="height:38rem; width:85.3rem;"/>
    </div>
    <div class="img-content">
        <h1 class="my-content">Welcome to Siddhi's Calligraphy</h1>
        <p>Personalized Teaching Done Right
        <br>I love teaching and am committed to helping students discover and reach their full potential.</p>

      <?php
         if(!isset($_SESSION['is_login'])){
         echo '<a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#sturegister">Get Started</a>';
         } else {
            echo '<a href="Student/studentProfile.php" class="btn btn-danger" >My Profile</a>';
         }
      ?>
    </div>
</div>
 <!--end background-->

 <!--Start Courses-->
<!--cards -->
<!--Start Courses-->
<div class="container mt-5">
  <h1 class="text-center">Popular Courses</h1>
  <!--1st course card deck-->
  <div class="card-deck mt-4">
    <?php 
      $sql = "SELECT * FROM course LIMIT 3";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $course_id = $row['course_id'];
          echo '
          <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin: 0px;">
  
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
    </a> ';
        }
      }

      ?>
   
  </div>
  <!--End 1st course card deck-->
  <!--2nd course card deck-->
  
  <div class="card-deck mt-4">
    <?php 
      $sql = "SELECT * FROM course LIMIT 3,3";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
          $course_id = $row['course_id'];
          echo '
          <a href=" href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px; margin: 0px;">
  
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
    </a> ';
        }
      }

      ?>
   
  </div>
<!--cards -->
  
  <div class="text-center m-2">
    <a class="btn btn-danger btn-sm" href="courses.php">View All Courses</a>
  </div>
</div>
</div>
<!--End Popular Courses-->

<!--Start Contact Us-->
<?php
include ('./contact.php');
?>
<!--End contact us-->

<!--Start footer-->
<?php
include ('./mainInclude/footer.php');
?>
<!--End footer-->