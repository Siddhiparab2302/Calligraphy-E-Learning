<?php
if(!isset($_SESSION)){
    session_start();
}


include('C:\wamp64\www\Calligraphy E-Learning\dbConnection.php');



if(isset($_REQUEST['contactSubmitBtn'])){
    //checking for empty fields
    if(($_REQUEST['name'] == "")|| ($_REQUEST['email'] == "")||
    ($_REQUEST['help'] == "")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all fields</div>';
    } else {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $help = $_REQUEST['help'];
        
        $sql = "INSERT INTO contact (name,email,help) VALUES 
        ('$name','$email','$help')";

        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Sent Successfully</div>';
            
        }else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Sent</div>';
        }
        
    }

}

?>


<!--Start Contact Us-->
<div class="container mt-4" id="Contact">
<!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact us</h2>
    <!--Start Contact us heading-->
    <div class="row">
    <div class="col-md-8">
      <form action="" method="post">
      <input type="text" class="form-control" id="name" name="name" placeholder="Name"><br>
      <input type="text" class="form-control" id="email" name="email" placeholder="Email"><br>
      <textarea class="form-control" id="help" name="help" placeholder="How can we help You?" style="height:150px;"></textarea><br>
      <input class="btn btn-danger" type="submit" id="contactSubmitBtn" value="Send" name="contactSubmitBtn"><br>
      <?php if(isset($msg)) {echo $msg;}?>
      </form>
      
    </div>

    <div class="col-md-4 stripe text=white text-center">
      <h4>Siddhi's Calligraphy</h4>
      <p>Maharashtra,India<br/>
      Shoot us an email at: <br/>
      siddhiparab232@gmail.com <br/>
      <i class="fab fa-facebook"></i>
    <i class="fab fa-twitter"></i>
    <i class="fab fa-instagram"></i>
    <i class="fas fa-phone-alt"></i>+232 800 606</p>
      
    </div>
    </div>
    </div>
<!--End contact us-->