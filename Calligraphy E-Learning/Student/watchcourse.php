<?php
if(!isset($_SESSION)){
    session_start();
}

include('C:\wamp64\www\Calligraphy E-Learning\dbConnection.php');

if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stulogemail'];
}else{
    echo "<script> location.href='../index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Courses</title>
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        
        

        <!--fontawesome css-->
        <link rel="stylesheet" href="../css/all.css">
        <link rel="stylesheet" href="../css/all.min.css">

        <!--Google font-->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&family=Monsieur+La+Doulaise&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

        <!--Custom Css-->
        <link rel="stylesheet" href="../css/stustyle.css">
</head>
<body>
    <div class="container-fluid bg-yellow p-2">
        <h3>Welcome to Calligraphy E-learning</h3>
        <a class="btn btn-success" href="./myCourse.php">My Courses</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col sm-3 border-right">
                <h4 class="text-center">Lessons</h4>
                <ul id="playlist" class="nav flex-column">
                    <?php
                    if(isset($_GET['course_id'])) {
                        $course_id=$_GET['course_id'];
                        $sql="SELECT * FROM lesson WHERE course_id = '$course_id'";
                        $result=$conn->query($sql);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){
                                echo '<li class="nav-item border-bottom py-2"
                                movieurl='.$row['lesson_link'].' style="cursor:pointer;">'.$row['lesson_name'].'</li>';
                            }
                        }
                    }
                    ?>
                    </ul>
            </div>
            <div class="col-sm-8">
                <video id="videoarea" src="" class="mt-5 w-75 ml-2"
                controls>
                </video>
        </div>
        </div>
        </div>
        
    </div>
    <!-- Jquery and bootstrap javascript-->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="js/all.min.js"></script>
        

    <!--Custom js-->
    <script type="text/javascript" src="../js/custom.js"></script>
    
</body>
</html>