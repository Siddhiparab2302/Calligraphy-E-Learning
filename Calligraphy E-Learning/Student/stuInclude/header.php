<?php
include_once('../dbConnection.php');
if(!isset($_SESSION)){
    session_start();
}
if(isset($_SESSION['is_login'])){
    $stulogemail = $_SESSION['stulogemail'];
}
//else{
// echo "<script> location.href='../index.php';</script>";
//}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--font awesome css-->
    <link rel="stylesheet" href="../css/all.min.css">

    <!--goggle font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet">

    <!--custom css-->
    <link rel="stylesheet" href="../css/stustyle.css">
</head>
<body>
    <!--Top Navbar-->
    <nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" 
    style="background-color: #972e60;">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" 
    href="studentProfile.php">Calligraphy E-learning</a>
    <a class="navbar-brand col-sm-3 col-md-2 mr-0"
    href="../index.php"><i class="fas fa-hand-point-left"></i>  Back</a>
    
    </nav>

    <!--Side bar-->
    <div class="container-fluid mb-5" style="margin-top:40px;">
    <div class="row" >
        <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
            <div class="sidebar-sticky" >
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="studentProfile.php">
                            <i class="fas fa-user"></i>
                            Profile <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myCourse.php">
                            <i class="fas fa-book-open"></i>
                            My Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="studentChangePass.php">
                            <i class="fas fa-key"></i>
                            Change Password
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

    
</body>
</html>