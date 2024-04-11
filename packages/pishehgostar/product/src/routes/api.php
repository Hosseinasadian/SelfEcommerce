<?php

use Illuminate\Support\Facades\Route;
use Pishehgostar\Product\Controllers\ProductGroupController;

Route::group([
    'prefix'=>'admin'
],function (){
    Route::apiResource('product-group',ProductGroupController::class);
});
