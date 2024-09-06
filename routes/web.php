<?php
Route::get('/', 'WebSiteController@home')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:web'], function () {
    Route::get('/', 'HomeController@index')->name('admin.home');

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::resource('evento', 'EventoController');
    Route::resource('ministrantes', 'MinistrantesController');

    Route::get('galeria/gallery',  'GaleriaController@gallery')->name('galeria.index');
    Route::post('galeria/gallery/do-upload', 'GaleriaController@doImageUpload')->name('gallery.upload');
    Route::get('galeria/gallery/destroy/{image}', ['as' => 'gallery.image.destroy', 'uses' => 'GaleriaController@destroyImage']);
    Route::get('galeria/gallery/edit/{image}', ['as' => 'gallery.image.update', 'uses' => 'GaleriaController@updateMidiaDescription']);

    Route::resource('usuario', 'UserController');
    Route::get('usuario/{usuario}/editar_senha', 'UserController@editPassword')->name('usuario.editar_senha');
    Route::post('usuario/atualizar_senha/{usuario}', 'UserController@updatePassword')->name('usuario.atualizar_senha');
});

Auth::routes();
