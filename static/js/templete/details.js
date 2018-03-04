$(function(){
	$('.p2>.p2_1').eq(0).addClass('hot');
	let atv = $('.active'),
	    error = $('.error'),
	    shops = $('.shops'),
	    evaluate = $('.evaluate'),
	    area = $('textarea'),
	    num1 = $('.num1'),
	    num = $('.p2_2');
	atv.click(function(){
		document.body.style.overflow='hidden';//浏览器滚动条隐藏
		$('.mask').css({'transform':'scale(1,1)',opacity:1});	
	});

	error.click(function(){
		document.body.style.overflow='visible';
		$('.mask').css({'transform':'scale(0,0)',opacity:0}) && $('.shop').css({'transform':'scale(0,0)',opacity:0});
	});

	shops.click(function(e){
		e.preventDefault();
        document.body.style.overflow='hidden';//浏览器滚动条隐藏
		$('.shop').css({'transform':'scale(1,1)',opacity:1});
		$('.shop img').css({display:'block'});

		let gid = location.search.split('=')[1];
		let spec=$('.p2>.hot').text();
		let nums=$('.p2_2').text();
		$.ajax({
			url:'/flowerAPP/index.php/buy/add',
			data:{gid:gid,spec,nums},
			success:function (data) {
				console.log(data);
            }
		})
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

//////////////
	$('.buy').click(function(){
		return false;
	});
////////////评论////////////
    let thumbHidden=$('.mpicture');
    $('#exampleInputThumbFile').on('change',function () {
        let file=this.files[0];
        let reader=new FileReader();
        reader.readAsDataURL(file);
        reader.onload=function (e) {
            $('<img>').attr('src',e.target.result).addClass('img-thumbnail').css({display:'block',width:'50%'}).appendTo('.thumb');
        };
        let formData = new FormData();
        formData.append('file', file);
        $.ajax({
            url:'/flowerApp/index.php/upload/index',
            type:'post',
            data:formData,
            processData:false,
            contentType:false,
            success:function (data) {
                thumbHidden.attr('value',data);
            }
        })
    });
    let star=$('.msatisfaction');
    star.on('click','i',function () {
        star.find('i').removeClass('star');
        $(this).addClass('star').prevAll('i').addClass('star');
        let msatisfaction=$(this).prevAll('i').length+1;
        $('#msatisfaction').val(msatisfaction);
    });
    $('input:submit').on('click',function (e) {
    	e.preventDefault();
		let formData=$('form').serialize();
		$.ajax({
			url:'/flowerApp/index.php/details/addComments',
			data:formData,
			type:'post',
			success:function (data) {
				if (data==='ok'){
                    $('.eval').css({width:'0%',opacity:0}) && area.css('display','none');
				}
            }
		});
    });
});

