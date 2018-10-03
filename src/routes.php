<?php  

    Route::get('index','Thangbeo\Languages\TranslateController@index');
    Route::get('create','Thangbeo\Languages\TranslateController@create');
    Route::post('create','Thangbeo\Languages\TranslateController@store');
    Route::get('delete/{id}','Thangbeo\Languages\TranslateController@delete');
    Route::get('edit/{id}','Thangbeo\Languages\TranslateController@edit');
    Route::post('edit/{id}','Thangbeo\Languages\TranslateController@update');


