<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\BackendController;
use App\Http\Middleware\Admin;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\CartCOntroller;


Route::get('/',[FrontendController::class,'index']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/product', [FrontendController::class, 'product']);
Route::get('/cart', [FrontendController::class, 'cart']);


//route guest (tamu) /member
Route::get('/', [FrontendController::class, 'index']);
Route::get('/product', [FrontendController::class, 'product'])->name('product.index');
Route::get('/product/{product}', [FrontendController::class, 'singleProduct'])
    ->name('product.show');
Route::get('/product/category/{slug}', [FrontendController::class, 'filterByCategory'])
    ->name('product.filter');
Route::get('/search', [FrontendController::class, 'search'])->name('product.search');
Route::get('/about', [FrontendController::class, 'about']);

//cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/add-to-cart/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::put('/cart/update/{id}', [CartController::class, 'updatecart'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');

//orders
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::get('/orders', [CartController::class, 'index'])->name('orders.index');
Route::get('/orders/{id}', [CartController::class, 'show'])->name('orders.show');


Route::get('promo/{namabarang?}/{kode?}', function ($barang = null, $kode = null) {
    return view('promo', compact('barang', 'kode'));
});

//route siswa

Route::get('siswa',[MyController::class,'index']);
Route::get('siswa/create', [MyController::class, 'create']);
Route::post('/siswa', [MyController::class, 'store']);
Route::get('siswa/{id}', [MyController::class, 'show']);
Route::get('siswa/{id}/edit', [MyController::class, 'edit']);
Route::put('siswa/{id}',[MyController::class, 'update']);
Route::delete('siswa/{id}', [MyController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//route untuk admin/backend
Route::group(['prefix'=>'admin', 'as' => 'backend.' ,'middleware'=>['auth', Admin::class]], function() {
    Route::get('/',[BackendController::class, 'index']);
    //crud
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
});
