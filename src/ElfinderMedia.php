<?php

namespace Touge\ElfinderMedia;

use Encore\Admin\Extension;

class ElfinderMedia extends Extension
{
    public $name = 'elfinder-media';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

}