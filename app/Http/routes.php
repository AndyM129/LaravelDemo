<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', 'HomeController@index');                                        //  首页
    Route::get('/home', 'HomeController@index');                                    //  首页
    Route::get('/category/list/{categoryId}', 'CategoryController@listView');       //  指定分类列表页
    Route::get('/book/detail/{bookId}', 'BookController@detail');                   //  图书详情页
    Route::get('/shoppingCart', 'ShoppingCartController@index');                    //  购物车
    Route::get('/pay', 'PayController@index');                                      //  支付页
    Route::get('/pay/detail/{orderId}', 'PayController@detail');                    //  支付详情页
    Route::get('/pay/result/{orderId}', 'PayController@result');                    //  支付结果页
});
