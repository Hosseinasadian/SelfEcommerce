<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('documentation/admin/product',function (){
    $t = now()->getTimestamp();
    $url = Storage::disk('documentation')->url("admin-product.yaml?v=$t");
    return view('swagger.documentation',compact('url'));
});
