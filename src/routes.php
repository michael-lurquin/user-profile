<?php

use Illuminate\Http\Request;

Route::group(['middleware' => ['web', 'auth']], function() {

    Route::get('profile', function() {

        return view('profile')->withUser(auth()->user());

    })->name('profile');

    Route::post('profile', function(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        dd($validatedData);

    })->name('profile');

});