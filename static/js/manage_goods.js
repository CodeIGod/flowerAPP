$(function () {
    ///////////////缩略图上传/////////////
    let thumbHidden=$('.gthumb');
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
    ///////////////详情图上传/////////////
    let gimgHidden=$('.gimg');
    $('#exampleInputImgFile').on('change',function () {
        let file=this.files[0];
        let reader=new FileReader();
        reader.readAsDataURL(file);
        reader.onload=function (e) {
            $('<img>').attr('src',e.target.result).addClass('img-thumbnail').css({display:'block',width:'50%'}).appendTo('.imgs');
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
                gimgHidden.attr('value',data);
            }
        })
    });
    //////////////轮播展示图上传///////////////
    $('#exampleInputSlideFile').on('change',function () {
        if ($('.slideBox>.img-thumbnail').length!=0){
            $('.slideBox>.img-thumbnail').remove();
        }
        let files=this.files;
        let str='';
        let gslide=$('.gslide');
        for (let i=0;i<files.length;i++){
            let reader=new FileReader();
            reader.readAsDataURL(files[i]);
            reader.onload=function (e) {
                $('<img>').attr('src',e.target.result).addClass('img-thumbnail').css({
                    display:'block',width:'calc(100% / '+files.length+')',maxHeight:'100px',
                }).appendTo('.slideBox');
            };
            let formData=new FormData();
            formData.append('file',files[i]);
            $.ajax({
                url:'/flowerApp/index.php/upload/index',
                type:'post',
                data:formData,
                processData:false,
                contentType:false,
                success:function (data) {
                    str+=data+',';
                    if (i=files.length-1){
                        let url=str.slice(0,-1);
                        gslide.attr('value',url);
                    }
                }
            });
        }
    });


    $('button').on('click',function (e) {
        e.preventDefault();
        let formData=$('form').serialize();
        $.ajax({
            url:'/profect/index.php/goods/add',
            type:'post',
            data:formData,
            dataType:'json',
            success:function (data) {
                if (data=='ok'){
                    alert('上传成功！');
                    location.href='/profect/index.php/goods/show';
                }else if (data=='error'){
                    alert('上传失败！');
                }
            }
        })
    })
});