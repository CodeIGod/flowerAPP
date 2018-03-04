$(function () {
    let choose = $('.isCheck > li');
    let btn=$('.p-pay');
    choose.on('click',function () {
        choose.find('.iconfont').removeClass('show');
        $(this).find('.iconfont').addClass('show');
    });
    ////////////////////提交订单//////////////
    btn.click(function () {
        let choose = $('.choose');
        let arr=[];
        $.each(choose,function (index,obj) {
            let gnum =$(obj).find('.goods_num').text();
            let gid = $(obj).data('gid');
            arr.push({gnum,gid});
        });
        let totalPrice = $('.totalPrice').text();
        $.ajax({
            url:'/flowerAPP/index.php/pay/add',
            data:{arr:JSON.stringify(arr),totalPrice},
            success:function () {
                // alert('订单添加成功');
            }
        })
    });
    ///////////////////////////////////////////////////////
    getTotal();
    function getTotal() {
        let choose = $('.choose');
        let totalNum=0,totalPri=0;
        $.each(choose,function () {
            let number = $(this).find('.goods_num').text();
            let price = $(this).find('.goods_price').text();
            totalPri+=number*price;
            totalNum+=number*1;
        });
        $('.totalPrice').text(totalPri);
        $('.totalNumber').text(totalNum);
    }

});