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

$app->get('/', function () use ($app) {
  $res['success'] = true;
  $res['result'] = "Hello there welcome to web api using lumen tutorial!";
  return response($res);
});

$app->post('/login', 'LoginController@index');
$app->post('/register', 'UserController@register');
$app->get('/user/{id}', ['middleware' => 'auth', 'uses' =>  'UserController@get_user']);


/* Route category ads */
$app->get('/category', 'CategoryAdsController@index');
$app->get('/category/{id}', 'CategoryAdsController@read');
$app->delete('/category/{id}', 'CategoryAdsController@delete');
$app->post('/category', 'CategoryAdsController@create');
$app->post('/category/update/{id}', 'CategoryAdsController@update');


/* Route menu ads */
$app->get('/menu_ads', 'MenuAdsController@index');
$app->get('/menu_ads/{id}', 'MenuAdsController@read');
$app->get('/menu_ads/delete/{id}', 'MenuAdsController@delete');
$app->post('/menu_ads/create', 'MenuAdsController@create');
$app->post('/menu_ads/update/{id}', 'MenuAdsController@update');
