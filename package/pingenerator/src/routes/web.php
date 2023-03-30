<?php 

Route::group(['namespace'=>'Ananth\Pingenerator\Controllers'],function(){

	/*Route::get('/pingenerator',['uses'=>'PingeneratorController@index'])->name('pingen.index');*/

	Route::get('/pingenrator',['uses'=>'PingeneratorController@generator'])->name('pingen.generate');

});

?>