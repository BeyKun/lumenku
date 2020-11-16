<?php

use Illuminate\Support\Facades\Artisan;

$router->post('/login', 'Auth\AuthController@login');
$router->post('/register', 'Auth\AuthController@register');
$router->post('/change-password', 'Auth\AuthController@changePassword');
$router->post('/password/reset-request', 'Auth/RequestPasswordController@sendResetLinkEmail');
$router->get('/password/reset/{token}', [ 'as' => 'password.reset', 'uses' => 'Auth\ResetPasswordController@showResetForm' ]);
$router->post('/password/reset', 'Auth\ResetPasswordController@reset');