$(function(){
    $("#btn").click(function(){
        $use = $("#use").val();
        $password = $("#password").val();
        if($use == "" || $password == ""){
            $("#empty").text("您好!请输入用户名或密码");
            return;
        }
        $.ajax({
            type:"GET",
            url:"http://datainfo.duapp.com/shopdata/userinfo.php",
            data:{status:"login",userID:$use,password:$password},
            success:function(data){
                if(data == 0){
                    $("#empty").text("您好,用户名不存在");
                }
                if(data == 2){
                    $("#empty").text("您好,用户名密码不符");
                }else{
                    $("#empty").text("登录成功");
                }
            }
        })
    })
});