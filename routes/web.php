<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * All main site related routes
 */

Route::get('/', 'HomeController@index')->name('home');

Route::get('/operators', 'HomeController@view_operators')->name('allOperators');
Route::get('/operator/id={id}', 'HomeController@operator')->name('viewOperator');

Route::get('/operator/id={id}/loadout', 'HomController@operatorLoadout')->name('viewOperatorLoadout');

Route::get('/weapons', 'HomeController@view_weapons')->name('allWeapons');
Route::get('/weapon/id={id}', 'HomeController@weapon')->name('viewWeapon');

Route::get('/maps', 'HomeController@maps')->name('allMaps');
Route::get('/map/id={id}', 'HomeController@map')->name('viewMap');

Route::get('/posts', 'HomeController@maps')->name('allPosts');
Route::get('/post/id={id}', 'HomeController@map')->name('viewPost');

/**
 * All Admin related routes
 */
Auth::routes();

Route::view('/tartarus', 'tartarus')->name('login');
Route::post('/tartarus', 'HomeController@login');

Route::get('logout', array('uses' => 'HomeController@logout'));

Route::prefix('taratarus')->group(function () {
    Route::get('/admin', 'HomeController@admin')->name('admin');

    // Operator specific pages
    Route::get('/admin/operators', 'HomeController@operators')->name('operators');
    Route::post('/admin/operators', 'HomeController@addOperator')->name('addOperator');

    Route::get('/admin/operator/edit/{id}', 'HomeController@editOperator')->name('editOperator');
    Route::post('/admin/operator/edit/{id}', 'HomeController@editOperator');

    // Weapon specific pages
    Route::get('/admin/weapons', 'HomeController@weapons')->name('weapons');
    Route::post('/admin/weapons', 'HomeController@addWeapons')->name('addWeapons');

    Route::get('/admin/weapon/edit/{id}', 'HomeController@editWeapon')->name('editWeapon');
    Route::post('/admin/weapon/edit/{id}', 'HomeController@editWeapon');

    // Blog specific pages
    Route::get('/admin/posts', 'HomeController@posts')->name('posts');
    Route::post('/admin/posts', 'HomeController@createPost')->name('addPost');

    Route::get('/admin/post/edit/{id}', 'HomeController@editPost')->name('editPost');
    Route::post('/admin/post/edit/{id}', 'HomeController@editPost');
});