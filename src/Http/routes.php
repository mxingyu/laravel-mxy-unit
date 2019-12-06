<?php
Route::get('/', 'UnitController@index');
Route::post('/', 'UnitController@store')->name('unit.store');
