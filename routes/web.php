<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryCantroller;
use App\Http\Controllers\PostavshikCantroller;
use App\Http\Controllers\ProductCantroller;
use App\Http\Controllers\EmploeeCantroller;
use App\Http\Controllers\DirectionCantroller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/category/root',[CategoryCantroller::class, 'categories']);
Route::get('/productlist',[CategoryCantroller::class, 'productlist']);
Route::get('/categoryeditcombo',[CategoryCantroller::class, 'categoryeditcombo']);
Route::post('/productlist/delete',[CategoryCantroller::class, 'productlistdelete']);
Route::post('/productlist/add',[ProductCantroller::class, 'productadd']);
Route::get('/categorycombo',[CategoryCantroller::class, 'categorycombo']);
Route::get('/postavshikcombo',[PostavshikCantroller::class, 'postavshikcombo']);
Route::post('/categorylist/update',[CategoryCantroller::class, 'categoryupdate']);
Route::post('/categorylist/delete',[CategoryCantroller::class, 'categorydelete']);
Route::post('/categorylist/add',[CategoryCantroller::class, 'categoryadd']);
Route::post('/emploeelist/delete',[EmploeeCantroller::class, 'emploeelistdelete']);
//Route::post('/productlist/edit',[ProductCantroller::class, 'productlistedit']);
Route::put('/productlist/{id}',[ProductCantroller::class, 'productlistedit']);



Route::get('/directionlist',[DirectionCantroller::class, 'directions']);
Route::get('/emploeelist',[EmploeeCantroller::class, 'emploeelist']);
Route::put('/emploeelist/{id}',[EmploeeCantroller::class, 'emploeelistedit']);
Route::post('/emploeelist/add',[EmploeeCantroller::class, 'emploeeadd']);
//Route::get('/directioncombo',[DirectionCantroller::class, 'directioncombo']);

Route::put('/directionlist/{id}',[DirectionCantroller::class, 'directionlistedit']);
Route::post('/directionlist/delete',[DirectionCantroller::class, 'directionlistdelete']);
Route::post('/directionlist/add',[DirectionCantroller::class, 'directionlistadd']);
Route::get('/reports',[DirectionCantroller::class, 'reports']);
