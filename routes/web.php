<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasketController;

Route::get('/', function () {
    $products = Product::all();
    dd($products[0]);
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index', [ProfileController::class, 'index'])-> name('index');
require __DIR__.'/auth.php';

// routes/web.php

Route::get('/', function () {
    $products = Product::all(); // Получаем все товары
    return view('welcome', compact('products')); // Передаем в представление
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


Route::get('/basket', [BasketController::class, 'index'])->name('basket.index');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::post('/products/filter', [ProductController::class, 'filter'])->name('products.filter');
// Добавьте этот маршрут в routes/web.php
Route::get('/debug-product-fields', function() {
    $product = \App\Models\Product::first();
    if ($product) {
        // Показываем все поля первой записи
        dd($product->toArray());
    }
    return 'No products found';
});

require __DIR__.'/auth.php';
