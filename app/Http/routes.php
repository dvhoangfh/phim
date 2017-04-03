<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    Route::get('/', [
        'as' => 'welcome',
        'uses' => 'WelcomeController@index'
    ]);

    Route::resource('search', 'WelcomeController@search');
   
    Route::group(['prefix' => 'quoc-gia'], function() {
        Route::get('/{slug}/', [
            'as' => 'welcome.quocgia',
            'uses' => 'QuocgiaCategoryController@index'
        ]);
    });
    Route::group(['prefix' => 'the-loai'], function() {
        Route::get('/{slug}/', [
            'as' => 'welcome.theloai',
            'uses' => 'TheloaiCategoryController@index'
        ]);
    });
    Route::get('/{slug}.html', [
        'as' => 'welcome.xemphim',
        'uses' => 'XemphimController@index'
    ]);
    Route::get('login', [
        'as' => 'login',
        'uses' => 'LoginController@index'
    ]);

    Route::get('logout', [
        'as' => 'logout',
        'uses' => 'LoginController@logout'
    ]);

    Route::post('postlogin', [
        'as' => 'postlogin',
        'uses' => 'LoginController@postLogin'
    ]);

    //Quản trị viên
    Route::group(['prefix' => 'admin', 'middleware' => array('auth')], function() {
        Route::group(['prefix' => 'theloai'], function() {
            Route::get('/', [
                'as' => 'theloai',
                'uses' => 'TheloaiController@index'
            ]);
            Route::post('store', [
                'as' => 'theloai.store',
                'uses' => 'TheloaiController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'theloai.edit',
                'uses' => 'TheloaiController@edit'
            ])->where(['id' => '[0-9]+']);

            Route::post('theloai/{id}', [
                'as' => 'theloai.update',
                'uses' => 'TheloaiController@update'
            ])->where(['id' => '[0-9]+']);
            Route::get('theloai/{id}', [
                'as' => 'theloai.delete',
                'uses' => 'TheloaiController@destroy'
            ])->where(['id' => '[0-9]+']);
        });
        Route::group(['prefix' => 'quocgia'], function() {
            Route::get('/', [
                'as' => 'quocgia',
                'uses' => 'QuocgiaController@index'
            ]);
            Route::post('store', [
                'as' => 'quocgia.store',
                'uses' => 'QuocgiaController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'quocgia.edit',
                'uses' => 'QuocgiaController@edit'
            ])->where(['id' => '[0-9]+']);

            Route::post('quocgia/{id}', [
                'as' => 'quocgia.update',
                'uses' => 'QuocgiaController@update'
            ])->where(['id' => '[0-9]+']);
            Route::get('quocgia/{id}', [
                'as' => 'quocgia.delete',
                'uses' => 'QuocgiaController@destroy'
            ])->where(['id' => '[0-9]+']);
        });
        Route::group(['prefix' => 'banner'], function() {
            Route::get('/', [
                'as' => 'banner',
                'uses' => 'BannerController@index'
            ]);
            Route::post('store', [
                'as' => 'banner.store',
                'uses' => 'BannerController@store'
            ]);
        });
        Route::group(['prefix' => 'phim'], function() {
            Route::get('/', [
                'as' => 'phim',
                'uses' => 'PhimController@index'
            ]);
            Route::get('create', [
                'as' => 'phim.create',
                'uses' => 'PhimController@create'
            ]);
            Route::post('store', [
                'as' => 'phim.store',
                'uses' => 'PhimController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'phim.edit',
                'uses' => 'PhimController@edit'
            ])->where(['id' => '[0-9]+']);

            Route::post('update/{id}', [
                'as' => 'phim.update',
                'uses' => 'PhimController@update'
            ])->where(['id' => '[0-9]+']);
            Route::get('delete/{id}', [
                'as' => 'phim.delete',
                'uses' => 'PhimController@destroy'
            ])->where(['id' => '[0-9]+']);
        });
        Route::group(['prefix' => 'phimbo'], function() {
            Route::get('/', [
                'as' => 'phimbo',
                'uses' => 'PhimboController@index'
            ]);
            Route::get('detail/{id}', [
                'as' => 'phimbo.detail',
                'uses' => 'PhimboController@detail'
            ]);
            Route::post('store/{id}', [
                'as' => 'phimbo.store',
                'uses' => 'PhimboController@store'
            ]);
            Route::get('detail/{id}/edit/{idphim}', [
                'as' => 'phimbo.detail.edit',
                'uses' => 'PhimboController@edit'
            ])->where(['id' => '[0-9]+']);

            Route::post('detail{id}update/{idphim}', [
                'as' => 'phimbo.detail.update',
                'uses' => 'PhimboController@update'
            ])->where(['id' => '[0-9]+']);
            Route::get('detail{id}update/{idphim}', [
                'as' => 'phimbo.detail.delete',
                'uses' => 'PhimboController@destroy'
            ])->where(['id' => '[0-9]+']);
        });
    });


    Route::group(['prefix' => 'angular'],function(){
        
        Route::group(['prefix' => 'theloai'], function() {
            Route::get('/', [
                'as' => 'theloai',
                'uses' => 'angular\NgController@index'
            ]);
            Route::post('store', [
                'as' => 'theloai.store',
                'uses' => 'Angular/NgController@store'
            ]);
            Route::get('edit/{id}', [
                'as' => 'theloai.edit',
                'uses' => 'Angular/NgController@edit'
            ])->where(['id' => '[0-9]+']);

            Route::post('theloai/{id}', [
                'as' => 'theloai.update',
                'uses' => 'Angular/NgController@update'
            ])->where(['id' => '[0-9]+']);
            Route::get('theloai/{id}', [
                'as' => 'theloai.delete',
                'uses' => 'Angular/NgController@destroy'
            ])->where(['id' => '[0-9]+']);
        });
    });
// Route::auth();

// Route::get('/home', 'HomeController@index');
