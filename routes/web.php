<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('livewire.about');
});
Route::get('/projects', function () {
    return view('livewire.projects');
});
Route::get('/blog', function () {
    return view('livewire.blog');
});
Route::get('/contact', function () {
    return view('livewire.contact');
});
