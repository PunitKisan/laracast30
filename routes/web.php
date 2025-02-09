<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get( '/', function () {
    return view( 'home' );
} );

//About page
Route::get( '/jobs', function () {
//    return ['Foo' => 'Bar']; //you can return array
    return view( 'jobs', [
        "jobs" => Job::with('employer')->get()
    ] );
} );

Route::get( '/jobs/{id}', function ( $id ) {

    $job = Job::find( $id );
    return view( 'job', [ 'job' => $job ] );
} );

//Contact page
Route::get( '/contact', function () {
//    return ['Foo' => 'Bar']; //you can return array
    return view( 'contact' );
} );
