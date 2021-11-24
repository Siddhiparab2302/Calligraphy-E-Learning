<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        
        

        <!--fontawesome css-->
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/all.min.css">

        <!--Google font-->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&family=Monsieur+La+Doulaise&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

        <!--Custom Css-->
        <link rel="stylesheet" href="css/style.css">
        <title>Siddhi Calligraphy</title>
        
    </head>

    <body>
        <!--Start navigation-->
        <nav class="navbar navbar-expand-sm navbar-light pl-5 fixed-top" style="background-color:rgba(190, 110, 138, 0.829);">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Siddhi Calligraphy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="courses.php" class="nav-link" >Courses</a></li>
        <li class="nav-item"><a href="paymentstatus.php" class="nav-link" >Payment Status</a></li>
        <?php
          session_start();
          if(isset($_SESSION['is_login'])){
            echo '<li class="nav-item"><a href="Student/studentProfile.php" class="nav-link" >My Profile</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link" >Logout</a></li>';
          }else{
            echo ' <li class="nav-item"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#stulogin">Login</a></li>
            <li class="nav-item"><a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#sturegister">Register</a></li>';
          }

        ?>
        
        

      </ul>
    </div>
  </div>
</nav>
<!--end navigation-->