<?php

Route::get('/',  function() {
    return view('admin.index');
})->name('dashboard');

Route::get('/kegiatan', 'Admin\KegiatanController@kegiatan');
Route::get('/author/data', 'Admin\KegiatanController@data')->name('author.data');
