<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('contacts', 'ContactController');

Route::group(['middleware' => 'locale'], function() {
    Route::get('lang/{lang}', 'LangController@changeLang')
        ->name('lang');
});
