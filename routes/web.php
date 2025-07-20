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


//Index  -  show all jobs
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
     'jobs' => $jobs
    ]);
});



//store - persist data in db
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);


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


//create - show form for creating new job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});


//show - show single job
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

//edit - show form for editing particular job
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

//update - update job
Route::patch('/jobs/{id}', function ($id) {
    //validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);


    //     //update job
    $job = Job::findOrFail($id);
    // $job->title = request('title');
    // $job->salary = request('salary');
    // $job->save();

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);


    //redirect
    return redirect('/jobs/' . $job->id);
});


//destroy - delete job
Route::delete('/jobs/{id}', function ($id) {
    //delete
    $job = Job::findOrFail($id);
    $job->delete();

    //redirect to /jobs
    return redirect('/jobs');
});
