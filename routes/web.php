<?php

Route::get('/', 'PostController@index');

Route::get('posts/{id}', 'PostController@show');

