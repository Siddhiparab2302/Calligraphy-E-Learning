//Ajax call for admin login
function checkAdminLogin(){
    var adminlogemail = $("#adminlogemail").val()
    var adminlogpass = $("#adminlogpass").val()
    $.ajax({
        url:"Admin/admin.php",
        method: "POST",
        data:{
            checklogemail:"checklogmail",
            adminlogemail:adminlogemail,
            adminlogpass:adminlogpass, 
        },
        success:function(data){
            if(data == 0){
                $("#statusadminlogmsg").html('<small class="alert alert-danger">Invalid email Id or Password! </small>');

            }else if (data == 1){
                $("#statusadminlogmsg").html('<small class="alert alert-success">successful Loading! </small>');
                setTimeout(()=>{
                    window.location.href = "Admin/adminDashboard.php";
                },1000);
            }

        },
    });
}