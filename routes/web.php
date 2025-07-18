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
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
     'jobs' => $jobs
    ]);
});

Route::post('/jobs', function () {
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
        //$_POST['title'];
    ]);

    return redirect('/jobs');
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
        'books',
        [
            'books' => Book::all()
        ]
    );
});

Route::get('/book/{id}', function ($id) {
    $book = Book::find($id);

    return view('book', ['book' => $book]);
});

Route::get('/students', function () {
    return view('students', [
        'students' => Student::all()
    ]);
});

Route::get('/student/{id}', function ($id) {
    $student = Student::find($id);

    return view('student', [
        'student' => $student
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});
