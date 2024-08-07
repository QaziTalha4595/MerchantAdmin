<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExampleController;
use App\Http\Middleware\Authenticate;
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


$router->get('LoginUser', ['as' => 'LoginUser', 'uses' => 'LoginController@LoginUser']);
$router->get('Admin/Login', ['as' => 'Login', 'uses' => 'LoginController@Login']);

// $router->get('dashboard', ['as' => 'dashboard', 'uses' => 'LoginController@dashboard']) ;




$router->group(['prefix' => 'Admin', 'middleware'=> 'auth'], function () use ($router) {
    $router->get('/Dashboard',["as"=>"Dashboard",  'uses' => 'LoginController@Dashboard']);
});








$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('Hello', function () {
        return 'Hello World';
    });
});
