<?php

use App\Models\Job;
use App\Models\Stock;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {

    return view('jobs', [
     'jobs' => Job::all()
    ]);
});

Route::get('/stocks', function () {
    return view('stocks', [
        'stocks' => Stock::all()
    ]);
});

Route::get('/stock/{id}', function ($id) {
    return view('stock', [
        'stock' => Stock::find($id)
    ]);
});

























Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

