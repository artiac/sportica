<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Admin routes */
Route::get('/admin', function(){
    return View::make('login');
});

Route::post('/admin', 'UserController@postLogin');

Route::group(['prefix' => 'admin', 'before' => 'auth'], function () {
    Route::get('/logout', function(){
        Auth::logout();
        return Redirect::to('/admin');
    });
    Route::get('/dashboard', 'DashboardController@getIndex');
    Route::get('/tree', 'AdminController@getTree');
    Route::resource('sports', 'SportsController');
    Route::resource('category', 'CategoryController');

    //POLLS
    Route::resource('poll', 'PollController');
    Route::post('poll/option/{id}','PollController@storeOption');
    Route::put('poll/option/{id}','PollController@updateOption');
    Route::delete('poll/option/{id}','PollController@destroyOption');
    Route::get('poll/{id}/edit/{option_id}','PollController@edit');

    Route::get('sport_category/{id}','DashboardController@getSportCategory');


     Route::group(['prefix' => 'point'], function () {
        Route::get('/','PointController@getPoints');
        Route::post('/store','PointController@postAdd');
        Route::get('/edit/{id}','PointController@getedit');
        Route::put('/update/{id}', 'PointController@putupdate');
        Route::get('/delete/{id}', 'PointController@getdelete');

    });

     Route::group(['prefix' => 'match'], function () {
        Route::get('/','MatchController@getMatchs');
        Route::post('/store','MatchController@postAdd');
        Route::get('/edit/{id}','MatchController@getedit');
        Route::put('/update/{id}', 'MatchController@putupdate');
        Route::get('/delete/{id}', 'MatchController@getdelete');

    });

     Route::group(['prefix' => 'post'], function () {
        Route::get('/','PostController@getPosts');
        Route::post('/store','PostController@postAdd');
        Route::get('/edit/{id}','PostController@getedit');
        Route::put('/update/{id}', 'PostController@putupdate');
        Route::get('/delete/{id}', 'PostController@getdelete');

    });
     

});

Route::group(['before' => 'auth'], function () {
});
