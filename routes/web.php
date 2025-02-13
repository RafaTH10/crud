<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class, 'loadAllUsers'])->name('users.index');

Route::get('/add-user', [UserController::class, 'LoadAddUserForm']);

Route::post('/add-user', [UserController::class, 'AddUser'])->name('add-user');

Route::get('/edit-user/{id}', [UserController::class, 'LoadEditUserForm']);

Route::post('/edit-user/{id}', [UserController::class, 'update'])->name('edit-user');

Route::get('/delete-user/{id}', [UserController::class, 'deleteUser'])->name('delete-user');
