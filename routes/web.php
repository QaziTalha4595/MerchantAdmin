<?php
use App\Http\Controllers\ExampleController;

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('Hello', ['as' => 'profile', function () {
    return route('profile');
}]);

$router->get('Login',["as"=>"Login", "uses"=>"ExampleController@Login"]);


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('Hello', function () {
        return 'Hello World';
    });
});
