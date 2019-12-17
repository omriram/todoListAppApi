
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get("/", "TaskController@allTasks");
Route::post("/edit", "TaskController@editTask");
Route::post("/create", "TaskController@createTask");
Route::post("/delete", "TaskController@deleteTask");
Route::post("/changeTaskStatus", "TaskController@changeTaskStatus");
