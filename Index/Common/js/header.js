//categoryDrop
$('.navigator .header .category .categoryDetail dl').on('mouseenter',function(){
	$('.navigator .header .category .categoryDetail dl .categoryDrop').hide();
	$(this).find('.categoryDrop').show();
	$('.navigator .header .category .categoryDetail dl .categoryShelter').css('background','transparent');
	$(this).find('.categoryShelter').css('background','#fff');
});
$('.navigator .header .category .categoryDetail dl').on('mouseleave',function(){
	$(this).find('.categoryDrop').hide();
});
//category
if($('.indexWrap').length > 0){
	$('.navigator .header .category .categoryDetail').show();
	$('.navigator .header .category').off();

}else{

	$('.navigator .header .category .categoryDetail').hide();
	$('.navigator .header .category').css('background','url(Index/Common/images/header/up.svg) no-repeat 150px 6px/20px 20px #654579');
	$('.navigator .header .category').on('mouseenter',function(){
		$('.navigator .header .category').css('background','url(Index/Common/images/header/down.svg) no-repeat 150px 6px/20px 20px #654579');
		$('.navigator .header .category .categoryDetail').show();
	});
	$('.navigator .header .category').on('mouseleave',function(){
		$('.navigator .header .category').css('background','url(Index/Common/images/header/up.svg) no-repeat 150px 6px/20px 20px #654579');
		$('.navigator .header .category .categoryDetail').hide();
	});
};
