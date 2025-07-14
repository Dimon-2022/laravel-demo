<?php

use App\Models\Book;
use App\Models\Job;
use App\Models\Stock;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->get();
    return view('jobs', [
     'jobs' => $jobs
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

Route::get('/books', function () {
    return view(
        'books', [
            'books' => Book::all()
        ]
    );
});

Route::get('/book/{id}', function ($id){
    $book = Book::find($id);
    
    return view('book', ['book' => $book]);
});











Route::get('/students', function(){
    return view('students',[
        'students' => Student::all()
    ]);
});

Route::get('/student/{id}', function($id){
    $student = Student::find($id);

    return view('student', [
        'student' => $student
    ]);
});





















Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});
