<?php

Route::get('/',  function() {
    return view('admin.index');
})->name('dashboard');

Route::get('/kegiatan', 'Admin\KegiatanController@kegiatan');
Route::get('/kegiatan/create', 'Admin\KegiatanController@create')->name('kegiatan.create');
Route::post('/kegiatan/store', 'Admin\KegiatanController@store')->name('kegiatan.store');
Route::delete('/kegiatan/{id}/delete', 'Admin\KegiatanController@destroy')->name('kegiatan.destroy');
