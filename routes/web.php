<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\ServicesController;
//use App\Models\User;
//use App\Models\Services;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Services',function(){
    return view('Services');
});

Route::get('/OurCustomer',function(){
    return view('OurCustomer');
});

Route::get('/login',function(){
    return view('login');
});