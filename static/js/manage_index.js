$(function () {

    //////////图片上传/////////////
    let fileBtn = $('#exampleInputFile');
    let imgHidden = $('input:hidden'),
        submit = $(':submit');
    fileBtn.on('change', function () {
        let file = this.files[0];
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function (e) {
            $('<img>').attr('src', e.target.result).addClass('img-thumbnail').css({
                display: 'block',
                width: '100px'
            }).insertAfter('div.form-group:last-of-type')
        };
        let formData = new FormData();
        formData.append('file', file);
        $.ajax({
            url: '/flowerApp/index.php/upload/index',
            type:'post',
            data: formData,
            processData:false,
            contentType:false,
            success: function (data) {
                imgHidden.attr('value', data);
            }
        });
    });
    submit.on('click', function (e) {
        e.preventDefault();
        let str = $('form').serialize();
        $.ajax({
            url: '/flowerApp/index.php/classif/add',
            type: 'post',
            data:str,
            success: function (data) {
                if (data=='ok'){
                    location.href='/flowerApp/index.php/classif/view';
                }else {
                    // alert('添加失败');
                }
            }
        });
    })
});