<?php
include('C:\wamp64\www\Calligraphy E-Learning\dbConnection.php');
include('./mainInclude/header.php');

?>
<!--end header-->

<!--start courses banner-->    
<div class="paystatus">
    <div class="payimg">
        <img src="./image/paystatus.jpg" alt="courses" style="height:32em; margin-top:3.9em; width:84.3em;"/>
    </div>
</div>
<div class="paycontent">
        <h1>Payment Status</h1>
        <form method="get" action="paymentreceipt.php">
            
            
            <input type="text" name="order_id" placeholder="Order Id">
           
            <input type="submit" class="btn btn-primary mx-4" value="View">
        </form>
    </div>
            
   
<!--end courses banner--> 
<!--Start Contact Us-->
<?php
include('./contact.php');
?>
<!--end Contact Us-->

<!--Start footer-->  
<?php
include('./mainInclude/footer.php');
?>

<!--end footer-->
