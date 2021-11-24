<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('./stuInclude/header.php');
include_once('../dbConnection.php');

if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stulogemail'];
}else{
    echo "<script> location.href='../index.php';</script>";
}
$sql = "SELECT * FROM student1 WHERE stu_email = '$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $stuId = $row["stu_id"];
    $stuName = $row["stu_name"];
}
if(isset($_REQUEST['updateStuNameBtn'])){
    if(($_REQUEST['stuName'] == "")){
        //msg displayed if required field missing
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fields </div>';

    } else {
        $stuName = $_REQUEST["stuName"];
        $sql = "Update student1 SET stu_name='$stuName' WHERE stu_email = '$stuEmail'";
        if($conn->query($sql) == TRUE){
            //below msg display on form submit success
        $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
        } else {
            //below msg display on form submit failed
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
        }
        }
    }
    ?>
    <div class="col=sm-6 mt-5">
        <form class="mx-5" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="stuId">Student Id</label>
                <input type="text" class="form-control" id="stuId"
                name="stuId" value="<?php if(isset($stuId)) {echo $stuId;}?>" readonly>
            </div>
            <div class="form-group">
                <label for="stuEmail">Email</label>
                <input type="text" class="form-control" id="stuEamil"
                value="<?php echo $stuEmail ?>" readonly>
            </div>
            <div class="form-group">
                <label for="stuName">Student Name</label>
                <input type="text" class="form-control" id="stuName"
                name="stuName" value="<?php if(isset($stuName)) {echo $stuName;}?>" >
            </div>
            <button type="submit" class="btn btn-primary" 
            name="updateStuNameBtn">Update</button>
            <?php if(isset($passmsg)) {echo $passmsg;} ?>
        </form>
    </div>
</div> <!--close row div from header file-->
<?php
include('./stuInclude/footer.php');
?>