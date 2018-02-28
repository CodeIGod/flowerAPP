$(function () {
    $('tbody').on('blur', 'input', function () {
        let type = this.dataset.type;
        let val = $(this).val();
        let cid = $(this).closest('tr').data('id');
        $.ajax({
            url: '/flowerApp/index.php/classif/update',
            type: 'post',
            data: {cid, val, type},
            success: function (data) {
                if (data == 'success') {
                    alert('修改成功');
                } else if (data=='fail') {
                    alert('修改失败');
                }
            }
        });
    });
    $('button').on('click', function () {
        let cid = $(this).closest('tr').data('id');
        let that=$(this);
        $.ajax({
            url: '/flowerApp/index.php/classif/delete',
            type: 'post',
            data: {cid},
            success: function (data) {
                if (data == 'ok') {
                    alert('数据时删除成功');
                    that.closest('tr').remove();
                } else if (data == 'error') {
                    alert('删除失败');
                }
            }
        });
    })
})