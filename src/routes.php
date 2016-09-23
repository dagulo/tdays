<?php


Route::group( [ 'prefix' => 'tdays' ], function(){
    Route::get('', '\Dagulo\Threedays\TdaysFrontController@index');
    Route::get('register', '\Dagulo\Threedays\TdaysFrontController@register');
});

Route::group( [ 'prefix' => 'tdays/admin' ], function(){
    Route::get('trace', function(){
        dd( 'Trace');
    });
});

Route::group( [ 'prefix' => 'tdays/api' ], function(){
    Route::get('trace', function(){
        dd( 'Trace');
    });
});


Route::group( [ 'prefix' => 'reklamo' ], function(){
    Route::get('/', '\Dagulo\Threedays\TdaysReklamoController@index');
});