<?php
/*
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
	
	$api->get('test', function () {
		return "Hello World ! Ceazer";
	});
});

$api->version('v1', function ($api) {
    $api->group(['middleware' => 'foo'], function ($api) {
        // Endpoints registered here will have the "foo" middleware applied.
    });
});
*/



Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', 'Admin\CategoryController');
