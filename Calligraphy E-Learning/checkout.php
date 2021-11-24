<?php
include('./dbConnection.php');
session_start();
if(!isset($_SESSION['stulogemail'])){
    echo "<script>location.href = 'loginorsignup.php'</script>";
}else{
    $stulogemail = $_SESSION['stulogemail'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!--Bootstrap Css-->
        <link rel="stylesheet" type="text/css" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        
        <!--fontawesome css-->
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/all.min.css">

        <!--Google font-->
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&family=Monsieur+La+Doulaise&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

        <!--Custom Css-->
        <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
        <div class="col-sm-6 offset-sm-3 jumbotron">
        <h3 class="mb-5">Welcome to Payment Page</h3>
    <form method="post" action="paymentdone.php">
        <div class="form-group row">
        <table border="2">
        <tbody>
            <tr>
                <th>S.No</th>
                <th>Label</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>1</td>
                <td><label>ORDER_ID</label></td>
                <td><input id="ORDER_ID" tabindex="1"  maxlength="20" size="20"
                name="ORDER_ID" autocomplete="off"
                value="<?php echo "ORDS" . rand(10000,999999)?>">
                </td>
                
            </tr>
            <tr>
                <td>2</td>
                <td><label>Student Email</label></td>
                <td><input id="CUST_ID" tabindex="2"  maxlength="20" size="20"
                name="CUST_ID" autocomplete="off"
                value="<?php if(isset($stulogemail)){echo $stulogemail;}?>" readonly>
                </td>

            </tr>
            <tr>
                <td>3</td>
                <td><label>Transaction date</label></td>
                <td><input id="TXN_DATE" tabindex="3"  maxlength="20" size="20"
                name="TXN_DATE" autocomplete="off"
                value="<?php echo date("Y-m-d H:i:s"); ?>" readonly>
                </td>

            </tr>
            <tr>
                <td>4</th>
                <td><label>Amount</label></td>
                <td><input title="TXN_AMOUNT" tabindex="10" 
                type="text" name="TXN_AMOUNT"
                value="<?php if(isset($_POST['id'])){echo $_POST['id'];}?>" readonly>
                </td>
            </tr>
            <tr>
                <!--<td>4</td>
                <td><label>INDUSTRY_TYPE_ID::*</label></td>-->
                <td><input type="hidden" id="INDUSTRY_TYPE_ID" tabindex="3"  maxlength="12" size="12"
                name="INDUSTRY_TYPE_ID" autocomplete="off"
                value="Retail">
                </td>

            </tr>
            <tr>
                <!--<td>5</td>
                <td><label></label></td>-->
                <td><input type="hidden" id="CHANNEL_ID" tabindex="4"  maxlength="12" size="12"
                name="CHANNEL_ID" autocomplete="off"
                value="Web">
                </td>

            </tr>
            
            <tr>
                <td></td>
                <td></td>
                <td><input value="CheckOut" type="submit" class="btn btn-danger" onclick="">
            <a href="./courses.php" class="btn btn-secondary">Cancel</td>
            </tr>
        </tbody>
    </table>  
</div> 
</form> 
<small class="form-text text-muted">Note:Complete Payment by clicking Checkout Button</small>
</div>
</div>
</div>   
</body>
</html>

<?php }

?>