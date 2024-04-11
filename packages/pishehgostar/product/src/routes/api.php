<?php

use Illuminate\Support\Facades\Route;
use Pishehgostar\Product\Controllers\Admin\GroupVariantController;
use Pishehgostar\Product\Controllers\Admin\ProductGroupController;

Route::group([
    'prefix'=>'admin'
],function (){
    Route::apiResource('product-group',ProductGroupController::class);
    Route::apiResource('group-variant',GroupVariantController::class);
});
