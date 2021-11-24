<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('../dbConnection.php');

//checking email exits verification
if(isset($_POST['checkemail']) && isset($_POST['sturegemail'])){
    $sturegemail = $_POST['sturegemail'];
    $sql = "SELECT stu_email FROM student1 WHERE stu_email='".$sturegemail."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_enclode($row);
}

//insert student
if(isset($_POST['stusignup']) && isset($_POST['sturegname']) &&
isset($_POST['sturegemail']) && isset($_POST['sturegpassword'])  ){

    $sturegname = $_POST['sturegname'];
    $sturegemail = $_POST['sturegemail'];
    $sturegpassword = $_POST['sturegpassword'];

    $sql= "INSERT INTO student1(stu_name,stu_email,stu_pass) VALUES ('$sturegname','$sturegemail','$sturegpassword')";

    if($conn->query($sql)==TRUE){
        echo json_encode("OK");
    }else {
        echo json_encode("Failed");
    }
    
}
//student login verification
if(!isset($_SESSION['is_login'])){
    if(isset($_POST['checklogemail']) && isset($_POST['stulogemail']) && isset($_POST['stulogpassword']) ){
        $stulogemail = $_POST['stulogemail'];
        $stulogpassword = $_POST['stulogpassword'];

        $sql ="SELECT stu_email,stu_pass FROM student1 WHERE stu_email='".$stulogemail."' AND stu_pass='".$stulogpassword."'";

        $result= $conn->query($sql);

        $row = $result->num_rows;

        if($row == 1){
            
            $_SESSION['is_login']=true;
            $_SESSION['stulogemail'] = $stulogemail;
            echo json_encode($row);
        } else if($row == 0){
            echo json_encode($row);
        }
    }
}
?>