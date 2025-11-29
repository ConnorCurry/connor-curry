<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Projects;
use App\Livewire\Blog;
use App\Livewire\Contact;

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/projects', Projects::class);
Route::get('/blog', Blog::class);
Route::get('/contact', Contact::class);
