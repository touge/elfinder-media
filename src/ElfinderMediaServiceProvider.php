<?php

namespace Touge\ElfinderMedia;

use Illuminate\Support\ServiceProvider;
use Encore\Admin\Admin;
use Encore\Admin\Form;

class ElfinderMediaServiceProvider extends ServiceProvider
{
    public function handle(){
        Admin::js('vendor/touge/elfinder-media/media.js');
        Admin::css('vendor/touge/elfinder-media/media.css');
    }

    /**
     * {@inheritdoc}
     */
    public function boot(ElfinderMedia $extension)
    {
        if (! ElfinderMedia::boot()) {
            return ;
        }

        include __DIR__ . "/Helper.php";

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'elfinder-media');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/touge/elfinder-media')],
                'elfinder-media'
            );
        }

        Admin::booting(function () {
            Form::extend('elfinder_media', Media::class);
        });

        $this->app->booted(function () {
            ElfinderMedia::routes(__DIR__.'/../routes/web.php');
        });
    }
}