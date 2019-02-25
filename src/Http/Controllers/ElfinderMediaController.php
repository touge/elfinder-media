<?php

namespace Touge\ElfinderMedia\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class ElfinderMediaController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Title')
            ->description('Description')
            ->body(view('elfinder-media::index'));
    }
}