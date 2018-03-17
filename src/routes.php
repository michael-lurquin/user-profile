<?php

use Illuminate\Http\Request;

Route::group(['middleware' => ['web', 'auth']], function() {

    Route::get('profile', function() {

        return view('profile')->withUser(auth()->user());

    })->name('profile');

    Route::post('profile', function(Request $request) {

        $rules = config('user-profile.rules');
        dd($rules);

        $validatedData = $request->validate($rules);

        auth()->user()->update($validatedData);

        return back()->withSuccess('User Profile Updated Successfully');

    })->name('profile');

});