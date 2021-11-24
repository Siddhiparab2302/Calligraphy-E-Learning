<?php

if(!isset($_SESSION)){
    session_start();
}

include('C:\wamp64\www\Calligraphy E-Learning\Admin\admininclude\header1.php');
include('..\dbConnection.php');
 if(isset($_SESSION['is_admin_login'])){
    $adminemail = $_SESSION['adminlogemail'];
 } else{
    echo "<script>location.href='../index.php'; </script>";
 }

?>

<div class="col-sm-9 mt-5">
<!--Table-->
    <p class="bg-dark text-white p-2">List of Orders</p>
    <?php
    $sql = "SELECT * FROM courseorder";
    $result = $conn->query($sql);
    if($result->num_rows > 0){

    ?>  
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">ORDER ID</th>
                    <th scope="col">COURSE ID</th>
                    <th scope="col">Student EMAIL</th>
                    <th scope="col">TXN_AMOUNT</th>
                    <th scope="col">TXN_DATE</th>
                </tr>
            </thead>
            <tbody>
               <?php while($row = $result->fetch_assoc()){ 
                echo '<tr>';
                    echo'<th scope="row">'.$row['order_id'].'</th>';
                    echo'<td>'.$row['course_id'].'</td>';
                    echo'<td>'.$row['stu_email'].'</td>';
                    echo'<td>'.$row['amount'].'</td>';
                    echo'<td>'.$row['date'].'</td>';
            '</tr>';
            } 
            ?>   
            </tbody>
        </table>
        <?php }?>

</div>
<?php
include('C:\wamp64\www\Calligraphy E-Learning\Admin\admininclude\footer1.php');
?>