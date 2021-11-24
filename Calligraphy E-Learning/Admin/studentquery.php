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
?>
 <div class="col-sm-9 mt-5">
<!--Table-->
    <p class="bg-dark text-white p-2">Student Queries</p>
    <?php
    $sql = "SELECT * FROM contact";
    $result = $conn->query($sql);
    if($result->num_rows > 0){

    ?>  
    <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Student Name</th>
                    <th scope="col">Student Email</th>
                    <th scope="col">Student's Query</th>
                </tr>
            </thead>
            <tbody>
               <?php while($row = $result->fetch_assoc()){ 
                echo '<tr>';
                    echo'<th scope="row">'.$row['name'].'</th>';
                    echo'<td>'.$row['email'].'</td>';
                    echo'<td>'.$row['help'].'</td>';
                    echo'<td>
                    

                    <form action="" method="POST" class="d-inline">
                    <input type="hidden" name="name" value='.$row["name"].'> 
                        <button type="submit" class="btn btn-info mr-3" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
                    
            </tr>';
            } ?>   
            </tbody>
        </table>
<?php } else{
    echo "0 Result";
} 
if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM contact WHERE name = {$_REQUEST['name']} ";
    if($conn->query($sql) == TRUE){
        echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
    } else {
        echo "Unable to delete Data";
    }
}
?>
</div>
</div>
<!--div row close from header-->


</div>
<!--div container-fluid close from header-->


<?php
include('C:\wamp64\www\Calligraphy E-Learning\Admin\admininclude\footer1.php');
?>