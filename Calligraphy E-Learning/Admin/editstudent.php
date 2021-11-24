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

//UPDATE
if(isset($_REQUEST['requpdate'])){
    //checking for empty fields
    if(($_REQUEST['stu_id'] == "") || ($_REQUEST['stu_name'] == "") ||
    ($_REQUEST['stu_email'] == "") ||($_REQUEST['stu_pass'] == "") ){
        //msg displayed if required field missing
        $msg = 'div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all fields</div>';
    } else {
        //Assigning user values to variable
        $sid = $_REQUEST['stu_id'];
        $sname = $_REQUEST['stu_name'];
        $semail = $_REQUEST['stu_email'];
        $spass = $_REQUEST['stu_pass'];
    
    $sql =  "UPDATE student1 SET stu_id = '$sid',stu_name = '$sname',
    stu_email = '$semail', stu_pass = '$spass' WHERE stu_id = '$sid'";
    if($conn->query($sql) == TRUE){
        //below msg delivery on form submit success
        $msg = 'div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated successfully </div>';
    } else {
        //below msg delivery on form submit failed
        $msg = 'div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update !</div>';
    }
    
    }
}
?>

<div class="col-sm-6 mt-5 mx-4 jumbotron">
<h3 class="text-center">Update Student Details</h3>
<?php
        if(isset($_REQUEST['view'])){
            $sql = "SELECT * FROM student1 WHERE stu_id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
    
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Student ID</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php if(isset($row['stu_id'])) 
            {echo $row['stu_id']; }?>" readonly>
        </div>
        <div class="form-group">
            <label for="stu_name">Student Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php if(isset($row['stu_name'])) 
            {echo $row['stu_name']; }?>" >
        </div>
        <div class="form-group">
            <label for="stu_email">Student Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email" value="<?php if(isset($row['stu_email'])) 
            {echo $row['stu_email']; }?>" >
        </div>
        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass" value="<?php if(isset($row['stu_pass'])) 
            {echo $row['stu_pass']; }?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
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