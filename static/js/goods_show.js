$(function () {
    $('tbody').on('blur', 'input', function () {
        let type = this.dataset.type;
        let val = $(this).val();
        let gid = $(this).closest('tr').data('id');
        $.ajax({
            url: '/flowerApp/index.php/goods/update',
            type: 'post',
            data: {gid, val, type},
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
        let gid = $(this).closest('tr').data('id');
        let that=$(this);
        $.ajax({
            url: '/flowerApp/index.php/goods/delete',
            type: 'post',
            data: {gid},
            success: function (data) {
                if (data == 'success') {
                    alert('数据时删除成功');
                    that.closest('tr').remove();
                } else if (data == 'error') {
                    alert('删除失败');
                }
            }
        });
    })
})