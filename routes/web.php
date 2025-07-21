<?php

use App\Http\Controllers\JobController;
use App\Models\Book;
use App\Models\Stock;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home');



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

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::view('/contact', 'contact');

/*

//Index  -  show all jobs
Route::get('/jobs', [JobController::class, 'index']);

//store - persist data in db
Route::post('/jobs',[JobController::class, 'store']);

//create - show form for creating new job
Route::get('/jobs/create',[JobController::class, 'create']);

//show - show single job
Route::get('/jobs/{job}', [JobController::class, 'show']);

//edit - show form for editing particular job
Route::get('/jobs/{job}/edit',[JobController::class, 'edit']);

//update - update job
Route::patch('/jobs/{job}', [JobController::class, 'update']);

//destroy - delete job
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

*/

Route::resource('jobs', JobController::class);
