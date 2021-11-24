<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        
        <!--fontawesome css-->
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/all.min.css">

        <link rel="stylesheet" href="css/style.css">
        </head>
<body>
<?php
        include('C:\wamp64\www\Calligraphy E-Learning\dbConnection.php');

        if(!isset($_GET['order_id']))
            $order_id=null;
            
            else
                $order_id=$_GET['order_id'];
                
            
            $receipt_sql=mysqli_query($conn,"SELECT co.order_id, co.stu_email, co.course_id, co.amount, co.date ,c.course_name,c.course_id FROM courseorder AS co JOIN course AS c ON c.course_id = co.course_id WHERE order_id='$order_id'");
            while($row = mysqli_fetch_assoc($receipt_sql))
            {
                
                $order_id = $row['order_id'];
                $stu_email = $row['stu_email'];
                $course_name = $row['course_name'];
                $course_id = $row['course_id'];
                $amount = $row['amount'];
                $date = $row['date'];
                
            }
            if(mysqli_num_rows($receipt_sql)==0){
                echo "no receipt";
                exit();
            }
        ?>
    <div class="paybill">
        <div class="container">
            <table id="paytable" class="table table-bordered ">
                <tbody>
                    <tr>
                        <th scope="row">Order Id :</th>
                        <td><?php echo $order_id; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Student Email :</th>
                        <td><?php echo $stu_email; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Course Id :</th>
                        <td><?php echo $course_id; ?> </td>
                    </tr>
                    <tr>
                        <th scope="row">Course Name:</th>
                        <td><?php echo $course_name; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Transaction Amount :</th>
                        <td><?php echo $amount; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Transaction Date :</th>
                        <td><?php echo $date; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Transaction status :</th>
                        <td>Success</td>
                    </tr>
                </tbody>
            </table>
            <div class="print-button" id="print-button">
                <button type="button" class="btn" id="btn" onclick="window.print()">Print Receipt</button>
            </div>
        </div>
        </div>