<?php

use Touge\ElfinderMedia\Http\Controllers\ElfinderMediaController;

Route::get('elfinder-media', ElfinderMediaController::class.'@index');