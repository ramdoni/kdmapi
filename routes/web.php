<?php


$router->get('/', [
  'uses' => 'ExampleController@index'
]);


$router->post('member/register', ['uses' => 'MemberController@register', 'middleware' => ['cors']]);
$router->post('member/login', ['uses' => 'MemberController@login', 'middleware' => ['cors']]);
$router->post('subscribe', ['uses' => 'SubscriberController@index', 'middleware' => ['cors']]);
$router->post('unsubscribe', ['uses' => 'SubscriberController@delete', 'middleware' => ['cors']]);