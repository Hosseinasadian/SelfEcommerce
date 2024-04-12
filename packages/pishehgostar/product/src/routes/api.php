<?php

use Illuminate\Support\Facades\Route;
use Pishehgostar\Product\Controllers\Admin\GroupVariantController;
use Pishehgostar\Product\Controllers\Admin\ProductGroupController;

Route::group([
    'prefix'=>'admin'
],function (){
    Route::apiResource('product-group',ProductGroupController::class);

    Route::post('group-variant/{group_variant}/values',[GroupVariantController::class,'addValue']);
    Route::scopeBindings()->group(function () {
        Route::put('group-variant/{group_variant}/values/{value}',[GroupVariantController::class,'updateValue']);
    });
    Route::apiResource('group-variant',GroupVariantController::class);
});
