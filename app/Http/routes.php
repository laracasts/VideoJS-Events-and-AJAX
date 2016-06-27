<?php

Auth::loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

Route::post('completions', 'CompletionsController@store');
