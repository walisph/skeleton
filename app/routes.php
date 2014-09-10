<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    // return gethostname();
    // var_dump(gethostname(true));
    $env = [
        'local' => [
            'walisph-ws-3',
            'walisph-ws-3.local'
        ]
    ];
    var_dump( App::environment() );

});
