<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('bookings', 'BookingController@index')->name('bookings.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bookings/create', 'BookingController@create')->name('bookings.create');
Route::post('/bookings/create', 'BookingController@store')->name('bookings.store');
Route::get('/bookings/delete/{booking}', 'BookingController@delete')->name('bookings.delete');
Route::post('/bookings/delete/{booking}', 'BookingController@destroy')->name('bookings.destroy');
Route::get('/bookings/{booking}', 'BookingController@show')->name('bookings.show');
Route::post('/bookings/{booking}', 'BookingController@update')->name('bookings.update');
 