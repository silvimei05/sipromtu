<?php

use Illuminate\Support\Facades\Route;


Route::get('/', fn() => view('home'));
Route::get('/about', fn()=> 'About')->name('about');
Route::get('/contact', fn() => view('kontak.index'));
Route::get('/home', fn()=> view('home.index'));
Route::get('/gallery', fn()=> view('Gallery'));
Route::get('/about', fn()=> view('About'));