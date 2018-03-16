<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('profile', function () {

        return view('profile')->withUser(auth()->user());

    })->name('profile')->middleware('auth');

});