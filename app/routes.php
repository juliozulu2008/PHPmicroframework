<?php

$route[] = ['/', 'HomeController@index'];
$route[] = ['/posts', 'HomeController@index'];
$route[] = ['/posts/{id}/show', 'HomeController@show'];





return $route;