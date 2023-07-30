<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function (){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
// Route user
Route::middleware('auth')->group(function (){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');//cart
    Route::get('/cart', [CartController::class, 'getCart'])->name('cart');
    Route::post('/add', [CartController::class, 'addCart'])->name('addCart');
    Route::get('/remove/{id}', [CartController::class, 'removeCart']);
});
require __DIR__ . '/auth.php';
// Route client
Route::get('/', [HomeController::class, 'getIndex']);
Route::get('/product', [ProductController::class, 'getProduct']);
Route::get('/detail/{slug}', [ProductController::class, 'getDetail']);
Route::get('/productbycat/{category_id}', [ProductController::class, 'getProdByCat'])->name('PBC');
Route::get('/blog', [PostController::class, 'getBlog']);
Route::get('/post', [PostController::class, 'getPost']);

Route::get('/form', function (){
    return view('client.pages.form');
});
Route::get('/about', function (){
    return view('client.pages.about');
});