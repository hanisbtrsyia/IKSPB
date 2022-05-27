<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TempatMenarikController;
use App\Http\Controllers\TempatPenginapanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {
    return view('auth.login');
});*/

//Route::post('addProd',[ProdukController::class, 'addProd'])->name('addProd');

//Route::resource('addproduk', ProdukController::class)->except(['edit']); //Produk
Route::get('produk/ProductDetails/{id_produk}', [ProdukController::class, 'index'])->name('produk.details'); 

Route::resource('addTempatMenarik', TempatMenarikController::class)->except(['edit']);

Route::resource('addTempatPenginapan', TempatPenginapanController::class)->except(['edit']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('/welcome');
});

Route::get('/homepelancongan', function () {
    return view('/homepelancongan');
});

Route::get('/homebelibelah', [ProdukController::class, 'homebelibelah']); 

Route::get('/homeTempatMenarik', function () {
    return view('/homeTempatMenarik');
});

Route::get('/homeTempatPenginapan', function () {
    return view('/homeTempatPenginapan');
});

Route::get('/pelancongan/addTempatMenarik', function () {
    return view('/pelancongan/addTempatMenarik');
});

Route::get('/pelancongan/updateTempatMenarik', function () {
    return view('/pelancongan/updateTempatMenarik');
});

Route::get('/dashboards/peniaga/profile', function () {
    return view('/dashboards/peniaga/profile');
});

Route::get('/pelancongan/addTempatPenginapan', function () {
    return view('/pelancongan/addTempatPenginapan');
});

Route::get('/pelancongan/updateTempatPenginapan', function () {
    return view('/pelancongan/updateTempatPenginapan');
});

Route::get('/belibelah/addproduk', function () {
    return view('/belibelah/addproduk');
});

Route::get('/belibelah/updateproduk', function () {
    return view('/belibelah/updateproduk');
});

Route::get('/pelancongan/admin/homeTempatMenarik', function () {
    return view('/pelancongan/admin/homeTempatMenarik');
});

Route::get('/pelancongan/peniaga/homeTempatPenginapan', function () {
    return view('/pelancongan/peniaga/homeTempatPenginapan');
});

Route::get('/pelancongan/peniaga/homebelibelah', function () {
    return view('/pelancongan/peniaga/homebelibelah');
});



Route::get('/belibelah/addtocart', function () {
    return view('/belibelah/addtocart');
});

Route::get('/belibelah/membuatpesanan', function () {
    return view('/belibelah/membuatpesanan');
});

Route::get('/pelancongan/peniaga/lihatpesanan', function () {
    return view('/pelancongan/peniaga/lihatpesanan');
});

Route::get('/pelancongan/pelanggan/infoTempatMenarik', function () {
    return view('/pelancongan/pelanggan/infoTempatMenarik');
});

Route::get('/pelancongan/pelanggan/infoTempatPenginapan', function () {
    return view('/pelancongan/pelanggan/infoTempatPenginapan');
});

Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('dashboards.admins.index');
        Route::get('profile',[AdminController::class,'profile'])->name('dashboards.admins.profile');
        Route::get('settings',[AdminController::class,'settings'])->name('dashboards.admins.settings');


        Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
        Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
        Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
       
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');
    Route::get('settings',[UserController::class,'settings'])->name('user.settings');
    
});