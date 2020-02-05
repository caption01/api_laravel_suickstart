<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

use App\Task;
use Illuminate\Http\Request;

// Route::group(['middleware' => ['web']], function () {

//     Route::get('/', function () {
//         return view('tasks', [
//             'tasks' => Task::orderBy('created_at', 'asc')->get()
//         ]);
//     });

//     Route::get('/tasks', 'TaskController@all')->name('tasks.all');

//     Route::post('/tasks', 'TaskController@store')->name('tasks.store');

//     Route::get('/tasks/{task}', 'TaskController@show')->name('tasks.show');

//     Route::put('/tasks/{task}', 'TaskController@update')->name('tasks.update');

//     Route::delete('/tasks/{task}', 'TaskController@destory')->name('tasks.destroy');

// });


// not using web:middle ware

Route::get('/', function () {
    return view('tasks', [
        'tasks' => Task::orderBy('created_at', 'asc')->get()
    ]);
});

Route::get('/tasks', 'TaskController@all')->name('tasks.all');

Route::post('/tasks', 'TaskController@store')->name('tasks.store');

Route::get('/tasks/{task}', 'TaskController@show')->name('tasks.show');

Route::put('/tasks/{task}', 'TaskController@update')->name('tasks.update');

Route::delete('/tasks/{task}', 'TaskController@destory')->name('tasks.destroy');

