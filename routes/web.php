<?php
use App\Models\Contact;
use App\Models\Home;
use App\Models\Project;
use App\Models\Skills;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', [
        'homes' => Home::take(5)->get()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'skills' => Skills::take(5)->get()
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        'projects' => Project::take(5)->get()
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'contacts' => Contact::latest()->take(5)->get()
    ]);
});