<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactSubmissionController;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Projects;
use App\Livewire\Blog;
use App\Livewire\Contact;
use App\Livewire\Projects\View as ProjectsView;
use App\Livewire\Blog\View as BlogView;
use App\Livewire\SubmissionReceived;

Route::get('/', Home::class);
Route::get('/about', About::class);
Route::get('/projects', Projects::class);
Route::get('/blog', Blog::class);
Route::get('/contact', Contact::class);
Route::get('/submission-received', SubmissionReceived::class);
Route::get('/projects/{projectId}', ProjectsView::class);
Route::get('/blog/{blogId}', BlogView::class);

Route::post('/contact-submission', [ContactSubmissionController::class, 'submission']);

Route::post('/set-timezone', function (Request $request) {
    $tz = $request->input('timezone');

    if ($tz) {
        session(['timezone' => $tz]);
    }

    return response()->noContent();
});
