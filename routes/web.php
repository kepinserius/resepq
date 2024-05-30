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
        Route::get('/', [UserController::class, 'index'])->middleware('isAdmin');
    });
    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->middleware('isAdmin');
        Route::post('/', [ProductController::class, 'store'])->middleware('isAdmin');
        Route::put('/{id}', [ProductController::class, 'update'])->middleware('isAdmin');
        Route::get('/{id}', [ProductController::class, 'destroy'])->middleware('isAdmin');
    });
    Route::prefix('/cart')->group(function() {
        Route::get('/', [admincartController::class, 'index'])->middleware('isAdmin');
    });
    Route::prefix('/pesanan')->group(function() {
        Route::get('/', [adminpesananController::class, 'index'])->middleware('isAdmin');
    });
    Route::prefix('/comment')->group(function() {
        Route::get('/', [komentarController::class, 'admin'])->middleware('isAdmin');
        Route::get('/{id}', [komentarController::class, 'destroy'])->middleware('isAdmin');
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
    Route::get('/logout', [loginController::class, 'logout'])->middleware('myAuth');
});

Route::prefix('/profile')->group(function () {
    Route::get('/', [profileController::class, 'showProfileForm'])->middleware('myAuth');
    Route::get('/{id}', [profileController::class, 'show'])->middleware('myAuth');
    Route::put('/{id}', [UserController::class, 'update'])->middleware('myAuth');
});

Route::prefix('/detail')->group(function () {
    Route::get('/{id}', [detailController::class, 'index'])->middleware('myAuth');
});

Route::prefix('/keranjang')->group(function () {
    Route::get('/', [keranjangController::class, 'index'])->middleware('myAuth');
    Route::get('/{id}', [keranjangController::class, 'destroy'])->middleware('myAuth');
    Route::post('/', [keranjangController::class, 'store'])->middleware('myAuth');
    Route::put('/{id}', [keranjangController::class, 'updateJson'])->middleware('myAuth');
});

Route::prefix('/checkout')->group(function() {
    Route::get('/', [checkoutController::class, 'index'])->middleware('myAuth');
    Route::get('/{id}', [checkoutController::class, 'checkOut'])->middleware('myAuth');

});

Route::prefix('/komentar')->group(function() {
    Route::get('/', [komentarController::class, 'index'])->middleware('myAuth');
    Route::post('/', [komentarController::class, 'store'])->middleware('myAuth');
});

Route::get('/beranda', [berandaController::class, 'index'])->middleware('myAuth');
Route::get('/home', [berandaController::class, 'getAllData'])->middleware('myAuth');

Route::get('/tentang', [tentangController::class, 'index']);
