<!--Start header-->
<?php
include('./dbConnection.php');
include('./mainInclude/header.php');
?>
<!--end header-->

<!--start courses banner-->    
<div class="course">
    <div class="courseimg">
        <img src="./image/courseimg.jpg" alt="courses" style="height:43em; margin-left:23em; width:40em;"/>
    </div>
    <div class="coursecontent">
        <h1>Learn Calligraphy</h1>
        <p>We've Handpicked The Tools And Fine-Tuned the Curriculum</p>
    </div>
</div>
<!--end courses banner--> 
<!--course1 -->
<div class="container mt-5">
<?php 
    if(isset($_GET['course_id'])){
        $course_id = $_GET['course_id'];
        $_SESSION['course_id'] = $course_id;
        $sql= "SELECT * FROM course WHERE course_id ='$course_id'";
        $result= $conn->query($sql);
        $row=$result->fetch_assoc();
    }
?>
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo str_replace('..','.',$row['course_img']) ?>" style="height:15em; margin-left:1em; width:20em;">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h1>Course Name: <?php echo $row['course_name'] ?></h1>
            <p>Description: <?php echo $row['course_desc'] ?> </p>
            <p>Duration: <?php echo $row['course_duration'] ?></p>
            <form action="checkout.php" method="post">
                <p class="card-text d-inline">Price: <small><del>&#8377 <?php echo $row['course_org_price'] ?></del></small>
                <span class="font-weight-bolder">&#8377 <?php echo $row['course_price'] ?></span></p>
                <input type="hidden" name="id" value="<?php echo $row['course_price']?>">
                <button type="submit" class="btn btn-danger text-white font-weight-bolder float-right" name="buy">Buy Now</button>
            </form>
        </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
            <th scope="col">Lesson no.</th>
            <th scope="col">Lesson Name</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM lesson";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $num = 0;
            while($row = $result->fetch_assoc()){
                if($course_id==$row['course_id']){
                    $num++;
            echo'<tr>
            <th scope="row">'.$num.'</th>
            <td>'.$row['lesson_name'].'</tr>';
                }
            }
            }
        ?>
        
            
        </tbody>
        </table>';
    </div>
</div>
</div>
<!--course1 -->

<!--Start footer-->  
<?php
include('./mainInclude/footer.php');
?>

<!--end footer-->