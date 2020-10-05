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
Route::get('/berita', 'Admin\BeritaController@index')->name('berita.index');
Route::get('/berita/create', 'Admin\BeritaController@create')->name('berita.create');
Route::post('/berita/store', 'Admin\BeritaController@store')->name('berita.store');
Route::delete('/berita/{id}/delete', 'Admin\BeritaController@destroy')->name('berita.destroy');
/** End Route Kegiatan */
