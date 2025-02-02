<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'home' );
} );

//About page
Route::get( '/jobs', function () {
//    return ['Foo' => 'Bar']; //you can return array
    return view( 'jobs', [
        "jobs" => [
            [
                'id'     => 1,
                'title'  => 'Directory',
                'salary' => '$50,000'
            ], [
                'id'     => 2,
                'title'  => 'Programmer',
                'salary' => '$100,000'
            ], [
                'id'     => 3,
                'title'  => 'Teacher',
                'salary' => '$40,000'
            ]
        ]
    ] );
} );

Route::get( '/jobs/{id}', function ( $id ) {
    $jobs = [
        [
            'id'     => 1,
            'title'  => 'Directory',
            'salary' => '$50,000'
        ], [
            'id'     => 2,
            'title'  => 'Programmer',
            'salary' => '$100,000'
        ], [
            'id'     => 3,
            'title'  => 'Teacher',
            'salary' => '$40,000'
        ]
    ];
    $job  = Arr::first( $jobs, fn( $jobs ) => $jobs['id'] == $id );

    return view( 'job', [ 'job' => $job ] );
} );

//Contact page
Route::get( '/contact', function () {
//    return ['Foo' => 'Bar']; //you can return array
    return view( 'contact' );
} );
