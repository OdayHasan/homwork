<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/app',function(){
    $tasks=[
        'Task-1' => 'Task val',
        'Task-2' => 'Task val',
        'Task-3' => 'Task val'
    ];

    return view('app',compact('tasks'));

});
Route::get('/show[id]',function($id){
    $tasks=[
        'Task-1' => 'Task val',
        'Task-2' => 'Task val',
        'Task-3' => 'Task val'
    ];
    $task = $tasks[$id];
    return view('show',compact('task'));

});