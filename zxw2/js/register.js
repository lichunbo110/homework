$(function(){
    $("#btn").click(function(){
        $use = $("#use").val();
        $password = $("#password").val();
        $confirm = $("#confirm").val();
        if($use == "" || $password == "" || $confirm == ""){
            $("#empty").text("您好!请输入用户名或密码");
            return;
        }
        if($password !== $confirm){
            $("#empty").text("您好!您两次输入的密码不一致");
            return;
        }
        if($("#checked").is(":checked")){
            $("#empty").text("请阅读并勾选走秀网服务条款");
            return;
        }
        $.ajax({
            type:"POST",
            url:"http://datainfo.duapp.com/shopdata/userinfo.php",
            data:{status:"register",userID:$use,password:$password},
            success:function(data){
                if(data == 0){
                    $("#empty").text("您好,用户名已经存在");
                }else{
                    window.location.href = "login.html";
                }
            }
        })
    })
});