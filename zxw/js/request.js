// 请求Home页列表数据
$(function(){
    $.ajax({
        type:"POST",
        url:"http://datainfo.duapp.com/shopdata/getGoods.php",
        dataType:"jsonp",
        success:function(data){
            for(var i = 0;i < data.length; i++){
                var img = data[i].goodsListImg;
                //console.log(data[9].goodsListImg);
                //console.log(data[i]);
                $div = $("<div>");
                $num = data[i].discount == 0 ? data[i].price : (data[i].discount / 10);
                $div.html("<li>" +
                    "<img src="+img+" class='photo'>" +
                    "<div class='data'>" +
                    "<h2>"+data[i].goodsName+"</h2>" +
                    "<p class='price'>¥"+data[i].price+"</p>" +
                    "<p class='small'>¥"+parseInt(data[i].price/$num)+"</p>" +
                    "<a><img src="+'img/bg_car.png'+"></a>" +
                    "<p class='size'>"+data[i].discount+"折</p>" +
                    "</div>" +
                    "</li>");
                $(".list").append($div);
            }
        }
    });

    // 请求列表页数据
    $.ajax({
        type:"POST",
        url:"http://datainfo.duapp.com/shopdata/getclass.php",
        success:function(data){
            var obj = JSON.parse(data);
            for(var i = 0; i < obj.length; i++){
                $ul = $("<ul>");
                $ul.html("<li>"+obj[i].className+"</li>");
                $(".listbox").append($ul);
            }
        }
    });
});

