<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/menu', 'HomeController@menu');
