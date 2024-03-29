<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieManagement\CategoryController;
use App\Http\Controllers\MovieManagement\MovieController;
use App\Http\Controllers\OperatorManagement\OperatorController;
use App\Http\Controllers\PermissionManagement\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleManagement\RoleController;
use App\Http\Controllers\UserManagement\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function() {
    Route::post('/user_register', 'userRegister');
    Route::post('/user_login', 'userLogin');
    Route::post('/user_logout', 'userLogout')->middleware('auth:user');

    Route::post('/operator_login', 'operatorLogin');
    Route::post('/operator_logout', 'operatorLogout')->middleware('auth:operator');
});

Route::middleware(['auth:user', 'role:admin'])->controller(RoleController::class)->prefix('roles')->group(function() {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{role}', 'show')->where('role', '[0-9]+');
    Route::post('/{role}', 'update')->where('role', '[0-9]+');
    Route::delete('/{role}', 'destroy')->where('role', '[0-9]+');
});

Route::middleware(['auth:user', 'role:admin'])->controller(PermissionController::class)->prefix('permissions')->group(function() {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{permission}', 'show')->where('permission', '[0-9]+');
    Route::post('/{permission}', 'update')->where('permission', '[0-9]+');
    Route::delete('/{permission}', 'destroy')->where('permission', '[0-9]+');
});

Route::prefix('movies')->controller(MovieController::class)->group(function() {
    Route::get('/', 'index');
    Route::post('/', 'store')->middleware(['auth:user', 'role:admin|movie_managing']);
    Route::get('/{movie}', 'show')->where('movie', '[0-9]+');
    Route::post('/{movie}', 'update')->where('movie', '[0-9]+')->middleware(['auth:user', 'role:admin|movie_managing']);
    Route::delete('/{movie}', 'destroy')->where('movie', '[0-9]+')->middleware(['auth:user', 'role:admin|movie_managing']);
});

Route::middleware(['auth:user', 'role:admin|user_managing'])->controller(UserController::class)->prefix('users')->group(function() {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{user}', 'show')->where('user', '[0-9]+');
    Route::post('/{user}', 'update')->where('user', '[0-9]+');
    Route::delete('/{user}', 'destroy')->where('user', '[0-9]+');
    Route::post('/changePassword/{user}', 'changePassword')->where('user', '[0-9]+');
});

Route::middleware(['auth:user', 'role:admin'])->controller(OperatorController::class)->prefix('operators')->group(function() {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{operator}', 'show')->where('operator', '[0-9]+');
    Route::post('/{operator}', 'update')->where('operator', '[0-9]+');
    Route::delete('/{operator}', 'destroy')->where('operator', '[0-9]+');
    Route::post('/change_password/{operator}', 'changePassword')->where('operator', '[0-9]+');
});

Route::controller(ProfileController::class)->prefix('profile')->group(function () {
    Route::get('/user_info', 'userInfo')->middleware('auth:user');
    Route::post('/change_password', 'changePassword')->middleware('auth:user');
    Route::post('/add_favorite_movie', 'addFavoriteMovie')->middleware('auth:user');
    Route::post('/delete_favorite_movie', 'deleteFavoriteMovie')->middleware('auth:user');
    Route::post('/change_avatar', 'changeAvatar')->middleware('auth:user');
    Route::get('/operator_info', 'operatorInfo')->middleware('auth:operator');
    Route::post('/operator_change_password', 'operatorChangePassword')->middleware('auth:operator');
});

Route::controller(CategoryController::class)->prefix('category')->group(function () {
    Route::get('/action', 'action');
    Route::get('/drama', 'drama');
    Route::get('/comedy', 'comedy');
    Route::get('/adventure', 'adventure');
});

Route::post('/search/{id}', );
