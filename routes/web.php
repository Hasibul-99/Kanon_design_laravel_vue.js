<?php

Route::get('/', function () {
    return view('kanon');
});

// Route::get('/{name}', function(){
//   return redirect('/');
// })->where ('name', '[A-Za-z]+');

// Route:: resource('phonebook', 'PhonebookController');


Route::get('/signin', function () {
    return view('login');
});
