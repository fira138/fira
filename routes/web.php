<?php
use App\http\Controllers\CategoryControllery;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/inputbuku', function () {
    return view('admin.inputbuku');
});

Route::get('/admin/inputkategori', [CategoryControllery::class, 'index'])->name('admin.inkategori');
Route::post('/admin/inputkategori', [CategoryControllery::class, 'store'])->name('admin.storekategori');

Route::get('/admin/inputpenulis', function () {
    return view('admin.penulisbuku');
});
