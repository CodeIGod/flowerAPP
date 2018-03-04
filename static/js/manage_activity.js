$(function () {
    ///////////////缩略图上传/////////////
    let bannerHidden=$('.abanner');
    $('#exampleInputBanner').on('change',function () {
        let file=this.files[0];
        let reader=new FileReader();
        reader.readAsDataURL(file);
        reader.onload=function (e) {
            $('<img>').attr('src',e.target.result).addClass('img-thumbnail').css({display:'block',width:'50%'}).appendTo('.banner');
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
                bannerHidden.attr('value',data);
            }
        })
    });
    $('button').on('click',function (e) {
        e.preventDefault();
        let a=$('select>option:selected');
        let gid='';
        for (let i=0;i<a.length;i++){
            gid+=$(a[i]).val()+',';
        }
        gid=gid.substring(0,gid.length-1);
        $('.gid:hidden').attr('value',gid);

        let formData=$('form').serialize();
        $.ajax({
            url:'/flowerApp/index.php/activity/add',
            type:'post',
            data:formData,
            success:function (value) {
                if (value==='success'){
                    alert('上传成功！');
                    location.href='/flowerApp/index.php/activity/show';
                }else if (value==='error'){
                    alert('上传失败！');
                }
            }
        })
    })
});