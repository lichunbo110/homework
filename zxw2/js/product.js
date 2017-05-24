// 请求商品详情页数据
function GetQueryString(name){
    // 定义正则 用于获取相应参数
    var reg = new RegExp("(^|&)" + name +"=([^&]*)(&|$)");
    // 字符串截取 获取匹配参数值
    var r = window.location.search.substr(1).match(reg);
    // 返回参数值
    if(r!=null) return decodeURI(r[2]);return null;
}

$.ajax({
    type:"POST",
    url:"http://datainfo.duapp.com/shopdata/getGoods.php",
    dataType:"jsonp",
    data:{goodsID:GetQueryString("goodsID")},
    success:function(data){
        for(var j = 0; j < data.length; j++){
            var imgs = data[j].goodsListImg;
            $num = data[j].discount == 0 ? data[j].price : (data[j].discount / 10);
            $li = $("<li>");
            $li.html("<div class='pic' goodsID='+data[i].goodsID+'><img src="+imgs+"></div>" +
                "<div class='text' goodsID='+data[i].goodsID+'><h2>"+data[j].goodsName+"</h2><p class='discount'>¥"+data[j].price+"</p><p class='cost'>"+parseInt(data[j].price/$num)+"</p><p>尺码: 160/84A  165/88A</p><p>数量: 1</p></div>");
            $(".product").append($li);
        }
    }
});