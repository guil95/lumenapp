<?php


$router->get('/', [
    'as' => '/', 'uses' => 'CustomerController@findAll'
]);
