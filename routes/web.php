<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\profileeditController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\shop1Controller;
use App\Http\Controllers\shop2Controller;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\komentarController;
use App\Http\Controllers\tentangController;
use App\Http\Controllers\adminprodukController;
use App\Http\Controllers\admincartController;
use App\Http\Controllers\adminpesananController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::prefix('/admin')->group(function () {
    Route::prefix('/user')->group(function () {
        Route::get('/', [UserController::class, 'index']);
    });
    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'index']);
        Route::post('/', [ProductController::class, 'store']);
        Route::put('/{id}', [ProductController::class, 'update']);
        Route::get('/{id}', [ProductController::class, 'destroy']);
    });
});

Route::prefix('/auth')->group(function () {
    Route::prefix('/sign')->group(function () {
        Route::get('/', function () {
            return view('signup');
        });
        Route::post('/', [userController::class, 'store']);
    });
    Route::prefix('login')->group(function () {
        Route::get('/', function () {
            return view('login');
        });
        Route::post('/', [loginController::class, 'login']);
    });
    Route::get('/logout', [loginController::class, 'logout']);
});

Route::prefix('/profile')->group(function () {
    Route::get('/', [profileController::class, 'showProfilePage']);
    Route::get('/{id}', [profileController::class, 'show']);
    Route::put('/{id}', [UserController::class, 'update']);
});


Route::get('/admin/create', [adminController::class, 'create']);
Route::get('/admin/edit', [adminController::class, 'edit']);
Route::get('/admin/delete', [adminController::class, 'destroy']);
Route::post('/admin', [App\Http\Controllers\adminController::class, 'store'])->name('admin.store');
Route::put('/admin/{id}', [App\Http\Controllers\adminController::class, 'update']);
Route::get('/admin/delete/{id}', [App\Http\Controllers\adminController::class, 'destroy']);
Route::get('/login', [loginController::class, 'index']);
Route::get('/signup', [signupController::class, 'index']);
Route::get('/profile', [profileController::class, 'showProfileForm'])->name('/profile');
Route::get('/profileedit', [profileeditController::class, 'showProfileeditForm'])->name('/profileedit');
Route::get('/beranda', [berandaController::class, 'index']);
Route::get('/detail', [detailController::class, 'index']);
Route::get('/shop', [shopController::class, 'index']);
Route::get('/shop1', [shop1Controller::class, 'index']);
Route::get('/shop2', [shop2Controller::class, 'index']);
Route::get('/keranjang', [keranjangController::class, 'index']);
Route::get('/checkout', [checkoutController::class, 'index']);
Route::get('/komentar', [komentarController::class, 'index']);
Route::get('/tentang', [tentangController::class, 'index']);
Route::get('/adminproduk', [adminprodukController::class, 'index']);
Route::get('/admincart', [admincartController::class, 'index']);
Route::get('/adminpesanan', [adminpesananController::class, 'index']);
