<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 2019-02-25
 * Time: 09:49
 */

if(!function_exists('image_extension')){
    /**
     * 检查是否为图片文件的后辍名
     */
    function is_image($file){
        $extensions = ['jpg','jpeg','gif','png','bmp','webp','psd','svg','tiff'];

        return in_array(substr(strrchr($file ,'.'),1) ,$extensions);
    }
}