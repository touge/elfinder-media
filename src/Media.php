<?php
/**
 * Created by PhpStorm.
 * User: nick
 * Date: 2019-01-28
 * Time: 12:34
 */

namespace Touge\ElfinderMedia;


use Encore\Admin\Form\Field;

class Media extends Field
{
    protected $view = 'elfinder-media::media';
    protected static $css = [
        'vendor/touge/elfinder-media/media.css',
    ];
    protected static $js = [
        'vendor/touge/elfinder-media/media.js'
    ];
    public function render()
    {
//        $name = $this->formatName($this->column);
        $baseURL = config('filesystems.disks.public.url');
        $backend_prefix = config('admin.route.prefix');

        $this->variables = [
            'baseURL'=>$baseURL,
        ];

        $this->script = <<<EOT
$(".select-elfinder-file").on('click', function (event) {
    event.preventDefault();
    var _id = $(this).data("id")
    var elfinderUrl = "/{$backend_prefix}/elfinder/popup/" + _id;
    openwindow(elfinderUrl, '选择文件', 850, 450);
});
EOT;

        return parent::render();
    }


}