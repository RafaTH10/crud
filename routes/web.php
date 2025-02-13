<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/user',[UserController::class,'LoadAllUsers']);

Route::get('/add-user', [UserController::class, 'LoadAddUserForm']);

Route::post('/add-user', [UserController::class, 'AddUser'])->name('add-user');

Route::get('/edit-user/{id}', [UserController::class, 'LoadEditUserForm']);

Route::post('/edit-user/{id}', [UserController::class, 'EditUser'])->name('edit-user');



