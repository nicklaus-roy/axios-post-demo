<?php

// Route::get('/', 'TasksController@index');
Route::get('/tasks/create', 'TasksController@create');
Route::post('/projects/{project}/tasks', 'TasksController@store');
