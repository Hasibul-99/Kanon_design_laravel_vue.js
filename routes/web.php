<?php

Route::get('/', function () {
    return view('kanon');
});

// Route::get('/{name}', function(){
//   return redirect('/');
// })->where ('name', '[A-Za-z]+');

// Route:: resource('phonebook', 'PhonebookController');


// user signIn page 
Route::get('/signin', function () {
    return view('login');
});

// user signUp page 
Route::get('/signup', function () {
    return view('signup');
});
