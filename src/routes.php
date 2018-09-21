<?php

Route::get('booking', function(){
	echo "Booking Calendar!";
});

Route::get('add/{a}/{b}', 'Juvo\Booking\BookingController@add');
Route::get('subtract/{a}/{b}', 'Juvo\Booking\BookingController@subtract');
