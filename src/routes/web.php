<?php

Route::group(['namespace' => 'Codificar\ReactNativeLogErrors\Http\Controllers'], function () {

    Route::get('/api/lib/rn-log-error', 'LogController@store');
});