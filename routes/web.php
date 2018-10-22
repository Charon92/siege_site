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

Route::get('/feedback', 'HomeController@feedback')->name('feedback');
Route::post('/feedback', 'HomeController@postFeedback');

Route::get('/operators', 'HomeController@view_operators')->name('allOperators');
Route::get('/operator/id={id}', 'HomeController@operator')->name('viewOperator');

Route::get('/operator/id={id}/loadout', 'HomeController@operatorLoadout')->name('viewOperatorLoadout');

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

Route::get('logout', array('uses' => 'HomeController@logout'));

Route::prefix('admin')->group(function () {
    Route::get('/', 'HomeController@admin')->name('admin');
    Route::post('/', 'HomeController@login');

    // Operator specific pages
    Route::get('/operators', 'HomeController@operators')->name('operators');
    Route::post('/operators', 'HomeController@addOperator')->name('addOperator');

    Route::get('/operator/edit/{id}', 'HomeController@editOperator')->name('editOperator');
    Route::post('/operator/edit/{id}', 'HomeController@editOperator');

    // Weapon specific pages
    Route::get('/weapons', 'HomeController@weapons')->name('weapons');
    Route::post('/weapons', 'HomeController@addWeapons')->name('addWeapons');

    Route::get('/weapon/edit/{id}', 'HomeController@editWeapon')->name('editWeapon');
    Route::post('/weapon/edit/{id}', 'HomeController@editWeapon');

    // Blog specific pages
    Route::get('/posts', 'HomeController@posts')->name('posts');
    Route::post('/posts', 'HomeController@createPost')->name('addPost');

    Route::get('/post/edit/{id}', 'HomeController@editPost')->name('editPost');
    Route::post('/post/edit/{id}', 'HomeController@editPost');

    // View all suggestions
    Route::get('/suggestions', 'HomeController@suggestions')->name('viewSuggestions');
});