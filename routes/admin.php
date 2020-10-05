<?php

Route::get('/',  function() {
    return view('admin.index');
})->name('dashboard');

/**
 * Route Kegiatan
 */
Route::get('/kegiatan', 'Admin\KegiatanController@kegiatan');
Route::get('/kegiatan/create', 'Admin\KegiatanController@create')->name('kegiatan.create');
Route::post('/kegiatan/store', 'Admin\KegiatanController@store')->name('kegiatan.store');
Route::delete('/kegiatan/{id}/delete', 'Admin\KegiatanController@destroy')->name('kegiatan.destroy');
/** End Route Kegiatan */


/**
 * Route Kegiatan
 */
Route::get('/berita', 'Admin\BeritaController@index')->name('berita');
/** End Route Kegiatan */
