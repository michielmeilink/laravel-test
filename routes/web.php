<?php


Route::get('/tasks', 'TasksController@index');
Route::get('tasks/{index}', 'TasksController@show');

