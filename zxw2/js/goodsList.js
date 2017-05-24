// 请求商品详情页列表数据
function GetQueryString(name){
    // 定义正则 用于获取相应参数
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    // 字符串截取 获取匹配参数值
    var r = window.location.search.substr(1).match(reg);
    // 返回参数值
    if(r!=null) return decodeURI(r[2]);return null;
}

$(function(){
    $.ajax({
        type:"POST",
        url:"http://datainfo.duapp.com/shopdata/getGoods.php",
        dataType:"jsonp",
        data:{classID:GetQueryString("goodsID")},
        success:function(data){
            for(var i = 0; i < data.length; i++){
                console.log(data[i]);
                var goodImg = data[i].goodsListImg;
                $li = $("<li>");
                $li.html("<img src="+ goodImg +"><h2>"+ data[i].goodsName +"</h2><p>"+ data[i].price +"</p>");
                $(".goodslist").append($li);
            }
        }
    })
});