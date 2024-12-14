<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    // return "hello world";
    return view('about', ['nama' => 'Bambang']);
});

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blogdua', function () {
    return view('blogdua');
})->name('blog.dua');

Route::get('/blogtiga', function () {
    return view('blogtiga');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/policy', function () {
    return view('policy');
});

Route::get('/author', function () {
    return view('author');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
