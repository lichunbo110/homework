var mySwiper = new Swiper('.swiper-container',{
    autoplay:2500, //可选选项 自动滑动
    autoplayDisableOnInteraction:false, //用户操作swiper之后，是否禁止autoplay
    loop:true, //是否循坏
    pagination:'.swiper-pagination', //是否需要分页器
    paginationClickable:true, //点击分页器是否控制图片切换
    keyboardControl:true, //是否控制键盘切换
    speed:1000
});