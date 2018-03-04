$(function () {
    let goods = $('.number');
    let tl, tr;
    let dui = $('.icon-dui');
    let choose = $('.choose');
    let del = $('.del');
    getTotal();
    ////////////////选中//////////////////////
    dui.on('click', function () {
        $(this).toggleClass('show');
        getTotal();
    });
    ///////////商品数量 减////////////////////////
    goods.on('click', '.input-sub', function () {
        let that = $(this);
        let gid = $(this).closest('.goods').data('gid');
        let nums = $(this).next().find('input:text').val(function (index, value) {
            if (value * 1 >= 1) {
                return value * 1 - 1;
            } else if (value * 1 <= 0) {
                return value;
            }
        }).val() * 1;
        if (nums === 0) {
            let isdelete = confirm('是否删除该商品');
            if (isdelete) {
                $.ajax({
                    url: '/flowerAPP/index.php/buy/delete',
                    data: {gid},
                    success: function (data) {
                        if (data == 1) {
                            that.closest('.goods').remove();
                            getTotal();
                        }
                    }
                });
            }
            return;
        }
        clearTimeout(tl);
        tl = setTimeout(function () {
            $.ajax({
                url: '/flowerAPP/index.php/buy/number',
                data: {nums: nums, gid},
                success: function (data) {
                    console.log(data);
                    getTotal();
                }
            });
        }, 400)
    });
    ///////////商品数量 加/////////////////////////
    goods.on('click', '.input-add', function () {
        let gid = $(this).closest('.goods').data('gid');
        let nums = $(this).prev().find('input:text').val(function (index, value) {
            return value * 1 + 1;
        }).val() * 1;
        clearTimeout(tr);
        tr = setTimeout(function () {
            $.ajax({
                url: '/flowerAPP/index.php/buy/number',
                data: {nums: nums, gid},
                success: function (data) {
                    getTotal();
                }
            });
        }, 400)
    });
    //////////////////删除///////////////////////////
    del.on('click', function () {
        let that = $(this);
        let gid = $(this).closest('.goods').data('gid');
        $.ajax({
            url: '/flowerAPP/index.php/buy/delete',
            data: {gid},
            success: function () {
                that.closest('.goods').remove();
                getTotal();
            }
        })
    });
    ////////////////////提交订单//////////////
    // btn.click(function () {
    //     let choose = $('.show').closest('.goods');
    //     let arr=[];
    //     $.each(choose,function (index,obj) {
    //         let gnum =$(obj).find('input:text').val();
    //         let gid = $(obj).data('gid');
    //         arr.push({gnum,gid});
    //     });
    //     let totalPrice = $('.totalPrice').text();
    //     $.ajax({
    //         url:'/flowerAPP/index.php/pay/add',
    //         data:{arr:JSON.stringify(arr),totalPrice},
    //         success:function (data) {
    //             console.log(data);
    //             location.href='/flowerAPP/index.php/pay/index?oid='+data;
    //         }
    //     })
    //
    // });
    ////////////////获取总数//////////////////////////
    function getTotal() {
        let checked = $('.show').closest('.goods');
        let totalPri = 0, totalNum = 0;
        $.each(checked, function () {
            let number = $(this).find('input:text').val();
            let price = $(this).find('.jiage').text();
            totalPri += number * price;
            totalNum += number * 1;
        });
        $('.totalPrice').text(totalPri);
        $('.totalNumber').text(totalNum);


    }

});