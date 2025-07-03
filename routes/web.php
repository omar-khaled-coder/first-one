<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
      'greeting' => 'Yo', // $greeting
      'name' => 'Omar',

      'jobs' => [

        [
          'id' => '1',
          'title' => 'Director',
          'salary' => '50,000$'
        ],

        [
          'id' => '2',
          'title' => 'Programmer',
          'salary' => '10,000$'
        ],

        [
          'id' => '3',
          'title' => 'Teacher',
          'salary' => '40,000$'
        ],

      ]

    ]);

});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            ['id' => 1, 'title' => 'Director', 'salary' => 50000],
            ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
            ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        ['id' => 1, 'title' => 'Director', 'salary' => 50000],
        ['id' => 2, 'title' => 'Programmer', 'salary' => 10000],
        ['id' => 3, 'title' => 'Teacher', 'salary' => 40000],
    ];

    $job = collect($jobs)->first(fn ($job) => $job['id'] == $id);

    if (!$job) {
        abort(404);
    }

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
  return view('contact');
});
