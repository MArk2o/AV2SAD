<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logar;

Route::get('/',[Logar::class,'index']);


Route::get('/',function(){
    return view('Paginas.telainicial');
});