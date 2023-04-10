<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);
Route::post('store', [TaskController::class, 'store']);
Route::post('delete/{id}', [TaskController::class, 'delete']);
Route::post('update/{id}', [TaskController::class, 'update']);
Route::post('/{id}', function ($id) {
    DB::table('tasks')->where('id', $id)->update([
        'name' => $_POST['updatedName'],
    ]);
    $tasks = DB::table('tasks')->get();
    return view('tasks', compact('tasks'));
});
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/about', [TaskController::class, 'show_name']);
//Route::post('/about', [TaskController::class, 'send_name']);
//Route::get('/contact', [TaskController::class, 'index']);
//Route::get('/contact/{id}', [TaskController::class, 'show']);


//Route::get('app', function () {
//    return view('layout.app');
//});
//Route::get('task', function () {
//   return view('tasks');
//});
