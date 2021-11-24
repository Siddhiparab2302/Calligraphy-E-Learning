$(document).ready(function(){
    //Email exits verification
    $("#sturegemail").on("blur",function(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var sturegemail = $("#sturegemail").val();
        $.ajax({
            url: "Student/addstudent.php",
            method:"POST",
            data:{
                checkemail:"checkemail",
                sturegemail:sturegemail,
            },
            success:function(data){
                console.log(data);
                
         },
        });
    });
});
    
function addStu(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var sturegname = $("#sturegname").val();
    var sturegemail = $("#sturegemail").val();
    var sturegpassword = $("#sturegpassword").val();
     //checking Form Fields On Form Submissions
    if(sturegname.trim() == ""){
        $("#statusMsg1").html('<small style="color:red;">Please Enter Name ! </small>');
        $("#sturegname").focus();
        return false;
    } 
    else if(sturegemail.trim() == ""){
        $("#statusMsg2").html('<small style="color:red;">Please Enter Email! </small>');
        $("#sturegemail").focus();
        return false;
    } else if(sturegemail.trim() != "" && !reg.test(sturegemail)){
        $("#statusMsg2").html('<small style="color:red;">Please Enter Valid Email! e.g. example@gmail.com </small>');
        $("#sturegemail").focus();
        return false;
    } else if(sturegpassword.trim() == ""){
        $("#statusMsg3").html('<small style="color:red;">Please Enter Password !</small>');
        $("#sturegpassword").focus();
        return false;
       
     } else{
        
        
        $.ajax({
            url:"Student/addstudent.php",
            method:"POST",
            dataType:"json",
            data:{
                stusignup: "stusignup",
                sturegname: sturegname,
                sturegemail: sturegemail,
                sturegpassword: sturegpassword,
            },
            success:function(data){
                console.log(data);
                if(data == "OK"){
                    $("#successMsg").html("<span class='alert alert-success'>Registration Successful</span>");
                    clearStuRegField()
                }
                else if(data=="Failed"){
                    $("#successMsg").html("<span class='alert alert-danger'>Unable to register</span>");
                }
            }
            });
        }
//Empty All Fields
function clearStuRegField(){
    $("#sturegform").trigger("reset");
    $("#statusMsg1").html("");
    $("#statusMsg2").html("");
    $("#statusMsg3").html("");
}
        
        
    }
    //Ajax call for student login
    function checkStuLogin(){
        var stulogemail = $("#stulogemail").val()
        var stulogpassword = $("#stulogpassword").val()
        $.ajax({
            url:"Student/addstudent.php",
            method: "POST",
            data:{
                checklogemail:"checklogmail",
                stulogemail:stulogemail,
                stulogpassword:stulogpassword, 
            },
            success:function(data){
                if(data == 0){
                    $("#statuslogmsg").html('<small class="alert alert-danger">Invalid email Id or Password! </small>');
    
                }else if (data == 1){
                    $("#statuslogmsg").html('<div class="spinner-border text-success" role="status"></div>');
                    setTimeout(()=>{
                        window.location.href="index.php";
                    },1000);
                }
    
            },
        });
    }
    
    
    