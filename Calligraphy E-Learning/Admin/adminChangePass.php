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
 $adminemail = $_SESSION['adminlogemail'];
 if(isset($_REQUEST['adminPassUpdatebtn'])){
    if(($_REQUEST['adminPass'] == "")){
    //msg displayed if requiref field missing
    $passmsg = 'div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all fields</div>';
    } else {
        $sql =  "SELECT * FROM admin WHERE admin_email = '$adminemail'";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $adminPass = $_REQUEST['adminPass'];
            $sql = "UPDATE admin SET admin_pass = '$adminPass' WHERE 
            admin_email = '$adminemail'";
            if($conn->query($sql) == TRUE){
                //below msg delivery on form submit success
            $passmsg = 'div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated successfully </div>';
            } else {
            //below msg delivery on form submit failed
            $passmsg = 'div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update !</div>';
            }
        }
    }
}
    ?>
    
    <div class="col-sm-9 mt-5">
        <div class="row">
            <div class="col-sm-6">
                <form class="mt-5 mx-5">
                    <div class="form-group">
                        <label for="inputemail">Email</label>
                        <input type="text" class="form-control" id="inputemail" placeholder="inputemail" value="<?php echo $adminemail?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputnewPassword">New Password</label>
                        <input type="text" class="form-control" id="inputnewPassword" placeholder="New Password" name="adminPass" >
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger mr-4 mt-4" name="adminPassUpdatebtn">Update</button>
                        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
                        <?php if(isset($passmsg)) {echo $passmsg;}?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
    <?php
    include('C:\wamp64\www\Calligraphy E-Learning\Admin\admininclude\footer1.php');
    ?>   