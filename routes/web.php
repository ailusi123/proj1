<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TemplateController;


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
})->name('login');

Route::get('template',[TemplateController::class,'show']);
Route::post('user/auth',[UserController::class,'auth']);
Route::get('user/logout',[UserController::class,'logout']);


Route::get('home',[HomeController::class,'home'])->middleware('auth');

Route::get('/profil',[ProfilController::class,'show']);
Route::get('/profil',[ProfilController::class,'profil']);
Route::get('/profil/add',[ProfilController::class,'add']);
Route::post('/profil/create',[ProfilController::class,'create']);
// Route::get('/profil/hapus/{id}',[ProfilController::class,'hapus']);
Route::post('/profil/{id}',[ProfilController::class,'edit']);
Route::post('/profil/{id}',[ProfilController::class,'update']);
Route::get('/profil/search',[ProfilController::class,'search']);

Route::get('/project',[ProjectController::class,'show']);
Route::get('/project/add',[ProjectController::class,'add']);
Route::post('/project/create',[ProjectController::class,'create']);
Route::get('/project/hapus/{id}',[ProjectController::class,'hapus']);
Route::get('/project/edit/{id}',[ProjectController::class,'edit']);
Route::post('/project/update/{id}',[ProjectController::class,'update']);

Route::get('user',[UserController::class,'show']);
Route::get('user/add',[UserController::class,'add']);
Route::post('user/create',[UserController::class,'create']);
Route::get('user/hapus/{id}',[UserController::class,'hapus']);
Route::get('user/edit/{id}',[UserController::class,'edit']);
Route::post('user/update/{id}',[UserController::class,'update']);
Route::get('user/search',[UserController::class,'search']);