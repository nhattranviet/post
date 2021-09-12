<?php

use Illuminate\Support\Facades\Route;
use Nhatcaht\Post\Http\Controller\PostController;


Route::group(['namespace' => 'Nhatcaht\Post\Http\Controller'], function(){
    Route::get('post', [PostController::class, 'index']);
});

Route::get('post3', [PostController::class, 'index']);