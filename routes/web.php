<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TempatMenarikController;
use App\Http\Controllers\TempatPenginapanController;
use App\Http\Controllers\ProfileController;
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


//Route::get('/profile/{id}/edit/{name}/{lotno}', [ProfileController::class, 'edit'])->name('profile.edit');
//Route::resource('profile', ProfileController::class)->except(['edit']);


Route::get('dashboards/peniaga/profile', [ProfileController::class, 'edit'])->name('profile.edit'); 
Route::post('dashboards/peniaga/profile_update', [ProfileController::class, 'update'])->name('profile.update'); 


Route::resource('addproduk', ProdukController::class)->except(['edit']); //Produk
Route::get('produk/ProductDetails/{id_produk}', [ProdukController::class, 'index'])->name('produk.details'); 
Route::get('pelancongan/peniaga/ListProduk', [ProdukController::class, 'PeniagaUpdate'])->name('produk.list'); 
Route::get('belibelah/updateproduk/{id_produk}', [ProdukController::class, 'edit'])->name('produk.edit'); 
Route::post('belibelah/editProduk/{id_produk}',[ProdukController::class, 'update'])->name('produk.update'); 
Route::post('deleteProd', [ProdukController::class, 'deleteProd'])->name('produk.deleteProd');

Route::resource('addTempatMenarik', TempatMenarikController::class)->except(['edit']);
Route::get('pelancongan/pelanggan/infoTempatMenarik/{id_tempatMenarik}', [TempatMenarikController::class, 'index'])->name('TempatMenarik.info'); 
Route::get('pelancongan/admin/ListTempatMenarik', [TempatMenarikController::class, 'AdminUpdate'])->name('TempatMenarik.list'); 
Route::get('pelancongan/updateTempatMenarik/{id_tempatMenarik}', [TempatMenarikController::class, 'edit'])->name('TempatMenarik.edit'); 
Route::post('pelancongan/editTempatMenarik/{id_tempatMenarik}',[TempatMenarikController::class, 'update'])->name('TempatMenarik.update'); 
Route::post('deleteTemMen', [TempatMenarikController::class, 'deleteTemMen'])->name('TempatMenarik.deleteTemMen');


Route::resource('addTempatPenginapan', TempatPenginapanController::class)->except(['edit']);
Route::get('pelancongan/pelanggan/infoTempatPenginapan/{id_tempatPenginapan}', [TempatPenginapanController::class, 'index'])->name('TempatPenginapan.info'); 
Route::get('pelancongan/peniaga/ListTempatPenginapan', [TempatPenginapanController::class, 'PeniagaUpdate'])->name('TempatPenginapan.list'); 
Route::get('pelancongan/updateTempatPenginapan/{id_tempatPenginapan}', [TempatPenginapanController::class, 'edit'])->name('TempatPenginapan.edit'); 
Route::post('pelancongan/editTempatPenginapan/{id_tempatPenginapan}',[TempatPenginapanController::class, 'update'])->name('TempatPenginapan.update'); 

Route::post('deleteTemPeng', [TempatPenginapanController::class, 'deleteTemPeng'])->name('TempatPenginapan.deleteTemPeng');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('/welcome');
});

Route::get('/layouts/homepage', function () {
    return view('/layouts/homepage');
});

Route::get('/layouts/homeInfo', function () {
    return view('/layouts/homeInfo');
});

Route::get('/homepelancongan', function () {
    return view('/homepelancongan');
});

Route::get('/homebelibelah', [ProdukController::class, 'homebelibelah']); 

Route::get('/homeTempatMenarik', [TempatMenarikController::class, 'homeTempatMenarik']); 

Route::get('/homeTempatPenginapan', [TempatPenginapanController::class, 'homeTempatPenginapan']); 
//Route::get('/pelancongan/updateTempatPenginapan', [TempatPenginapanController::class, 'pelancongan.updateTempatPenginapan']); 
//Route::get('/pelancongan/peniaga/ListTempatPenginapan', [TempatPenginapanController::class, 'pelancongan.peniaga.ListTempatPenginapan']); 

Route::get('/pelancongan/addTempatMenarik', function () {
    return view('/pelancongan/addTempatMenarik');
});

//Route::get('/pelancongan/updateTempatMenarik', function () {
//    return view('/pelancongan/updateTempatMenarik');
//});

//Route::get('/dashboards/peniaga/profile', function () {
//    return view('/dashboards/peniaga/profile');
//});

//Route::get('/pelancongan/peniaga/ListTempatPenginapan', function () {
//    return view('/pelancongan/peniaga/ListTempatPenginapan');
//});

Route::get('/pelancongan/addTempatPenginapan', function () {
    return view('/pelancongan/addTempatPenginapan');
});

//Route::get('/pelancongan/updateTempatPenginapan', function () {
//    return view('/pelancongan/updateTempatPenginapan');
//});

Route::get('/belibelah/addproduk', function () {
    return view('/belibelah/addproduk');
});

//Route::get('/belibelah/updateproduk', function () {
//    return view('/belibelah/updateproduk');
//});

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

//Route::get('/pelancongan/pelanggan/infoTempatPenginapan', function () {
//    return view('/pelancongan/pelanggan/infoTempatPenginapan');
//});

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