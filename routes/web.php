<?php

// Route::get('/', 'TasksController@index');
Route::get('/tasks/create', 'TasksController@create');
Route::post('/projects/{project}/tasks', 'TasksController@store');
Route::post('/tasks/{task}/delete', 'TasksController@delete');
