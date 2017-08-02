//初始化swiper-wrapper 的宽度
$('.indexSwiper .swiper-wrapper').css('width',function(){
	return $('.indexSwiper .swiper-wrapper .swiper-slide').length * 1200
});

var mySwiper = new Swiper('.swiper-container', {
	autoplay: 2000,
	direction : 'horizontal'
})