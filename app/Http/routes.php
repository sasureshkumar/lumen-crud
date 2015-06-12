<?php

$app->get('/', function() {
    return redirect()->route('customer.index');
});

$app->get('customer', [
    'as' => 'customer.index', 'uses' => 'App\Http\Controllers\CustomerController@index'
]);
$app->get('customer/create', [
    'as' => 'customer.create', 'uses' => 'App\Http\Controllers\CustomerController@create'
]);
$app->post('customer', [
    'as' => 'customer.store', 'uses' => 'App\Http\Controllers\CustomerController@store'
]);
$app->get('customer/{id}/edit', [
    'as' => 'customer.edit', 'uses' => 'App\Http\Controllers\CustomerController@edit'
]);
$app->patch('customer/{id}', [
    'as' => 'customer.update', 'uses' => 'App\Http\Controllers\CustomerController@update'
]);
$app->get('customer/{id}/delete', [
    'as' => 'customer.delete', 'uses' => 'App\Http\Controllers\CustomerController@delete'
]);
$app->delete('customer/{id}', [
    'as' => 'customer.destroy', 'uses' => 'App\Http\Controllers\CustomerController@destroy'
]);