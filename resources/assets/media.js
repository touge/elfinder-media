
function openwindow(url, name, iWidth, iHeight) {
    var iTop = (window.screen.height - 30 - iHeight) / 2; //获得窗口的垂直位置;
    var iLeft = (window.screen.width - 10 - iWidth) / 2; //获得窗口的水平位置;
    window.open(url, name, 'height=' + iHeight + ',,innerHeight=' + iHeight + ',width=' + iWidth + ',innerWidth=' + iWidth + ',top=' + iTop + ',left=' + iLeft + ',toolbar=no,menubar=no,scrollbars=auto,resizeable=no,location=no,status=no');
}

function preview(url) {
    var html = '<img src="' + LA.PUBLIC_UPLOAD_URL_PREFIX + url + '" style="width: 100px;" alt="Attachment"\/>';
    return html
}

function processSelectedFile(file, id) {
    $('input[data-id="media-'+id+'"]').val(file)
    // $("#media-" + id).val(file)
    // $('#preview-' + id).html(preview(file));
    $('div[data-id="preview-'+id+'"]').html(preview(file))
    // $('#preview-' + id).html(preview(file));
}

if(typeof is_image === 'undefined'){
    /**
     * 文件是否为图片文件
     * @param file
     * @returns {number}
     */
    function is_image(file){
        return ['jpg','jpeg','gif','png','bmp','webp','psd','svg','tiff']
            .indexOf(file.substr(file.lastIndexOf(".")+1).toLowerCase()) !== -1
    }
}

