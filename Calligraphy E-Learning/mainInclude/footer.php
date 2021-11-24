<!--start footer-->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white"> Copyright &copy; 2021 || Designed by <a href="#login" data-bs-toggle="modal" data-bs-target="#adminlogin">Siddhi Parab</a> ||
  
  
</small>
</footer>
<!--End footer-->



<!-- Modal -->
<div class="modal fade" id="sturegister" tabindex="-1" aria-labelledby="sturegisterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="sturegisterLabel">Student Registration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--Start student Registration form-->
      <?php include('studentRegistration.php');?>

       <!--end student Registration form-->
      </div>
      <!--<div class="col-md-6">
                <form >
                    <div class="form-group">
                        <label class="form-label">Username  </label><small class="msg"id="statusMsg1"></small>
                        <input type="text" name="sturegname" id="sturegname" class="form-control1" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email  </label><small class="msg"id="statusMsg2"></small>
                        <input type="text" name="sturegemail" id="sturegemail" class="form-control1" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password  </label><small class="msg"id="statusMsg3"></small>
                        <input type="password" name="sturegpassword" id="sturegpassword" class="form-control1" required>
                    </div>
                    <small id= "successMsg"></small>
                <button type="submit" id="signup" class="btn btn-danger" onclick="addStu()">Register</button>
                </form>
            </div>
-->
    <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="submit" class="btn btn-danger" onclick="addStu()" id="signup"> Register</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!--end student register modal-->

<!--start student Login modaL-->

<!-- Modal -->
<div class="modal fade" id="stulogin" tabindex="-1" aria-labelledby="stuloginlabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuloginLabel">Student Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="adminloginform">
        <div class="form-group">
          <i class="fas fa-envelope"></i><label for="stulogemail" class="pl-2 font-weight bold">Email </label>
          <input type="email" class="form-control"  placeholder="Email" name="stulogemail" id="stulogemail">
          
        </div>
        <div class="form-group">
        <i class="fas fa-key "></i><label for="stulogpassword" class="pl-2 font-weight bold"> Password</label>
          <input type="password" class="form-control" placeholder="Password" name="stulogpassword" id="stulogpassword">
        </div>
      </form>
        
      </div>
      <div class="modal-footer">
      <span id="statuslogmsg"></span>
        <button type="submit" class="btn btn-danger" id="stuloginbtn" onclick="checkStuLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!--end student Login modal-->


<!--start Admin Login modaL-->

<!-- Modal -->
<div class="modal fade" id="adminlogin" tabindex="-1" aria-labelledby="adminlogin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminloginLabel">Admin Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="adminloginform">
        <div class="form-group">
          <i class="fas fa-envelope"></i><label for="adminlogemail" class="pl-2 font-weight bold">Email </label>
          <input type="email" class="form-control"  placeholder="Email" name="adminlogemail" id="adminlogemail">
          
        </div>
        <div class="form-group">
        <i class="fas fa-key "></i><label for="adminlogpass" class="pl-2 font-weight bold"> Password</label>
          <input type="password" class="form-control" placeholder="Password" name="adminlogpass" id="adminlogpass">
        </div>
      </form>
        
      </div>
      <div class="modal-footer">
      <span id="statusadminlogmsg"></span>
        <button type="submit" class="btn btn-danger" id="adminloginbtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!--end Admin Login modal-->
<!-- Jquery and bootstrap javascript-->

  
  

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="js/all.min.js"></script>
        <script type="text/javascript" src="js/ajaxrequest.js"></script>
        <script type="text/javascript" src="js/adminajaxrequest.js"></script>
    </body>
</html>