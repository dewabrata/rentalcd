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

$router->group(['prefix' => 'api'], function () use ($router) {
  $router->get('item',  ['uses' => 'ItemController@showAllItemCD']);
  $router->get('member',  ['uses' => 'CdmemberController@showAllCdMember']);
  $router->post('savemember', 'CdmemberController@create');
  $router->delete('delete/{id}', 'CdmemberController@destroy');
  $router->post('update/{id}', 'CdmemberController@update');


});
