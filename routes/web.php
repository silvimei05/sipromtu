<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('home'));
Route::get('/berita', fn() => view('berita.index'));
Route::get('/contact', fn() => view('kontak.index'));
Route::get('/home', fn()=> view('home.index'));
Route::get('/gallery', fn()=> view('galeri.index'));
Route::get('/about', fn()=> view('About'));