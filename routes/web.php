<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//get all user defined views
$app->get('user_views/{id}', 'UserViewsController@getAllUserViews');

//create user view
$app->post('createUserView', 'UserViewsController@createUserView');

//get user view by ID
$app->get('user_view/{id}', 'UserViewsController@getUserViewById');

//update user view
$app->post('saveUserView', 'UserViewsController@saveUserView');

//delete user view
$app->delete('delete_view/{id}', 'UserViewsController@deleteUserView');