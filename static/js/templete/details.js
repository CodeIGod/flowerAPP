$(function(){
	let atv = $('.active');
	    error = $('.error'),
	    shops = $('.shops'),
	    evaluate = $('.evaluate'),
	    area = $('textarea'),
	    num1 = $('.num1'),
	    num = $('.p2_2'),
	atv.click(function(){
		document.body.style.overflow='hidden';//浏览器滚动条隐藏
		$('.mask').css({'transform':'scale(1,1)',opacity:1});	
	});

	error.click(function(){
		document.body.style.overflow='visible';
		$('.mask').css({'transform':'scale(0,0)',opacity:0}) && $('.shop').css({'transform':'scale(0,0)',opacity:0});
	});

	shops.click(function(){
		$('.shop').css({'transform':'scale(1,1)',opacity:1});
		$('.shop img').css({display:'block'});
	});

	evaluate.click(function(){
		$('.eval').css({width:'100%',opacity:1}) && area.css('display','block');
	});

	area.keyup(function(){
		num1.text($(this).val().length);
	});

	$('.eval .left').click(function(){
		$('.eval').css({width:'0',opacity:0}) && area.css('display','none');
	});
	////add///
	$('.p2').on('click','.p2_4',function(){
		let sum = $(this).prev().text()*1+1;
		$(this).prev().text(sum) ;
	});
	//reduce ///
	$('.p2').on('click','.p2_3',function(){
		let sum = $(this).next().text()*1-1;
		 if(sum <= 0){
			sum = 0;
		}
		$(this).next().text(sum) ;
	});
	$('.p2_1').click(function(){
		$(this).addClass('hot').siblings().removeClass('hot');
	});


	$('.buy').click(function(){
		return false;
	});



});

