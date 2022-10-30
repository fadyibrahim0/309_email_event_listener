<?php

use App\Events\DemoEvent;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', function() {
    $data = ['name' => 'Mohamed', 'email' => 'example@gourp.com'];

    event(new DemoEvent($data));

    dd('Mail has been sent');
});

// create mail with markdown

// how to use this mail class (Mail::to()->send())


// with events and listeners 

    // create event with data property
    // create listener (--event=)
    // attach event with its listeners in the EventServiceProvider
    // call the event and pass $data to the constructor
    // the listener uses this data by $event variable ($event->data), and pass this data to mail
