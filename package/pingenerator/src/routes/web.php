<?php 

Route::group(['namespace'=>'Ananth\Pingenerator\Controllers'],function(){

	Route::get('/pingenerator',['uses'=>'PingeneratorController@index'])->name('pingen.index');

	Route::post('/pingenerator',['uses'=>'PingeneratorController@generator'])->name('pingen.generate');

});

?>