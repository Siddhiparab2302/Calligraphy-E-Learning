<?php
if(!isset($_SESSION)){
    session_start();
}

include('C:\wamp64\www\Calligraphy E-Learning\Admin\admininclude\header1.php');
include('C:\wamp64\www\Calligraphy E-Learning\dbConnection.php');
 if(isset($_SESSION['is_admin_login'])){
    $adminemail = $_SESSION['adminlogemail'];
 } else{
    echo "<script>location.href='../index.php'; </script>";
 }


if(isset($_REQUEST['newStuSubmitBtn'])){
    //checking for empty fields
    if(($_REQUEST['stu_name'] == "")|| ($_REQUEST['stu_email'] == "")||
    ($_REQUEST['stu_pass'] == "")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all fields</div>';
    } else {
        $stu_name = $_REQUEST['stu_name'];
        $stu_email = $_REQUEST['stu_email'];
        $stu_pass = $_REQUEST['stu_pass'];

        $sql = "INSERT INTO student1 (stu_name,stu_email,stu_pass) VALUES ('$stu_name','$stu_email','$stu_pass')";

        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Added Successfully</div>';
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to add Student</div>';
        }
        
    }

}

?>

<div class="col-sm-6 mt-5 mx-4 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Student Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" >
        </div>
        <div class="form-group">
            <label for="stu_email">Student Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email">
        </div>
        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="newStuSubmitBtn" name="newStuSubmitBtn">Submit</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) {echo $msg;}?>
    </form>
</div>
</div>
</div>


<?php
include('C:\wamp64\www\Calligraphy E-Learning\Admin\admininclude\footer1.php');
?>