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

<div class="container jumbotron mb-5">
    <div class="row">
        <div class="col-md-4">
            <h5 class="mb-3">If Already Registered!! Login</h5>
            <form role="form" id="stuLoginForm">
                <div class="form-group">
                    <i class="fas fa-envelope"></i><label for="stulogemail" class="pl-2 font-weight-bold">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="stulogemail" id="stulogemail">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="stulogpassxword" class="pl-2 font-weight-bold">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="stulogpasswordail" id="stulogpassword">
                </div>
                <button type="submit" class="btn btn-danger" onclick="checkStuLogin()">Login</button>
            </form>
            <!--<small id=""></small>-->
            
        </div>
        <div class="col-md-6 offset-md-1">
            <h5 class="mb-3">New User !! SignUp</h5>
            <form role="form" id="stuRegForm">
                <div class="form-group">
                    <i class="fas fa-user"></i><label for="sturegname" class="pl-2 font-weight-bold">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="sturegname" id="sturegname">

                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i><label for="sturegemail" class="pl-2 font-weight-bold">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="sturegemail" id="sturegemail">

                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i><label for="sturegpassword" class="pl-2 font-weight-bold"> New Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="sturegpassword" id="sturegpassword">

                </div>
                <button type="submit" class="btn btn-danger" onclick="addStu()">SignUp</button>

            </form>
        </div>
    </div>
</div>
<hr/>
<!--Start Contact Us-->
<?php
include ('./contact.php');
?>
<!--End contact us-->

<!--Start footer-->
<?php
include ('./mainInclude/footer.php');
?>
<!--End footer-->