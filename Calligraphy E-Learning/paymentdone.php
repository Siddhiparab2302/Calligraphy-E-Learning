<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!--font awesome css-->
    <link rel="stylesheet" href="./css/all.min.css">

    <!--goggle font-->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet">

    <!--custom css-->
    <link rel="stylesheet" href="C:\wamp64\www\Calligraphy E-Learning\css\style.css">
    <title>Paid</title>
</head>
<body>
<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('C:\wamp64\www\Calligraphy E-Learning\dbConnection.php');

//insert order
if(isset($_POST['ORDER_ID']) && isset($_POST['TXN_AMOUNT']) ){
    $order_id = $_POST['ORDER_ID'];
    $stu_email = $_SESSION['stulogemail'];
    $course_id = $_SESSION['course_id'];
    $amount = $_POST['TXN_AMOUNT'];
    $date = $_POST['TXN_DATE'];
    $sql = "INSERT INTO courseorder(order_id,stu_email,course_id,amount,date) VALUES ('$order_id','$stu_email','$course_id','$amount','$date')";
    if($conn->query($sql) == TRUE){?>
        <div class="check" >
    
    <i class="fas fa-check-circle"></i>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p> you successfully bought this course !!</p>
        <hr>
        <p class="mb-0">Go to Your Course page to watch the Course</p>

    </div>
    <a class="btn text-black font-weight-bolder float-right" href="Student/myCourse.php">Go to Course Page</a>
</div>
</body>

<style>
    
    .check .alert-success{
        width:30%;
        margin-left:30rem;
    }
    .fa-check-circle{
        font-size:38px;
        color:green;
        background-color:white;
        border-radius:50%;
        margin-top:7rem;
        margin-left:40rem;
    }
    .check .btn{
        background-color: rgb(39, 109, 214);
        color:white;
        margin-left:30rem;
        margin-top:-1rem;
    }
    .check .btn:hover{
        background-color:black;
      }
</style>
</html>
     
<?php
    };
}
?>


</body>
</html>