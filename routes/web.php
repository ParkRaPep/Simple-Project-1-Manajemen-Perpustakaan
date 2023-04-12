<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title"=>"Home",
        "nama"=>"Rapep",
        "nim"=>"G.231.21.0176"
    ]);
});

Route::get('/buku', function () {
    return view('buku', [
        "title"=>"Buku"
    ]);
});

Route::get('/pinjam', function () {
    return view('pinjam', [
        "title"=>"Peminjaman Buku"
    ]);
});

Route::get('/denda', function () {
    return view('denda', [
        "title"=>"Denda"
    ]);
});

Route::get('/user', function () {
    return view ('user', [
        "title"=>"Informasi Akun"
    ]);
});
