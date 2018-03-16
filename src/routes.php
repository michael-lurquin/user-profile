<?php

Route::get('profile', function() {
    return view('profile')->withAuth(auth()->user());
})->name('profile')->middleware('auth');