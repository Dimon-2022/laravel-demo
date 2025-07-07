<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
     'jobs' => [
       [
         'id' => 1,
         'title' => 'Director',
         'salary' => '$50,000'
       ],
       [
         'id' => 2,
         'title' => 'Programmer',
         'salary' => '$10,000'
       ],
       [
         'id' => 3,
         'title' => 'Teacher',
         'salary' => '$40,000'
       ],
     ]
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
       [
        'id' => 1,
        'title' => 'Director',
        'salary' => '$50,000'
       ],
       [
        'id' => 2,
        'title' => 'Programmer',
        'salary' => '$10,000'
       ],
       [
        'id' => 3,
        'title' => 'Teacher',
        'salary' => '$40,000'
       ],
    ];



    $job = Arr::first($jobs, fn ($job) => (int) $id === $job['id']);



    return view('job', ['job' => $job]);


});
