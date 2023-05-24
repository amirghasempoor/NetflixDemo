<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieManagement\MovieController;
use App\Http\Controllers\OperatorManagement\OperatorController;
use App\Http\Controllers\PermissionManagement\PermissionController;
use App\Http\Controllers\Profile\ProfileController;
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

Route::post('/user_register', [AuthController::class, 'userRegister']);
Route::post('/user_login', [AuthController::class, 'userLogin']);
Route::post('/user_logout', [AuthController::class, 'userLogout'])->middleware('auth:sanctum');

Route::prefix('roles')->group(function() {
    Route::get('/', [RoleController::class, 'index'])->middleware('auth:sanctum');
    Route::post('/', [RoleController::class, 'store'])->middleware('auth:sanctum');
    Route::get('/{role}', [RoleController::class, 'show'])->where('role', '[0-9]+')->middleware('auth:sanctum');
    Route::put('/{role}', [RoleController::class, 'update'])->where('role', '[0-9]+')->middleware('auth:sanctum');
    Route::delete('/{role}', [RoleController::class, 'destroy'])->where('role', '[0-9]+')->middleware('auth:sanctum');
});

Route::prefix('permissions')->group(function() {
    Route::get('/', [PermissionController::class, 'index'])->middleware('auth:sanctum');
    Route::post('/', [PermissionController::class, 'store'])->middleware('auth:sanctum');
    Route::get('/{permission}', [PermissionController::class, 'show'])->where('permission', '[0-9]+')->middleware('auth:sanctum');
    Route::put('/{permission}', [PermissionController::class, 'update'])->where('permission', '[0-9]+')->middleware('auth:sanctum');
    Route::delete('/{permission}', [PermissionController::class, 'destroy'])->where('permission', '[0-9]+')->middleware('auth:sanctum');
});

Route::prefix('movies')->group(function() {
    Route::get('/', [MovieController::class, 'index']);//->middleware('auth:sanctum');
    Route::post('/', [MovieController::class, 'store'])->middleware('auth:sanctum');
    Route::get('/{movie}', [MovieController::class, 'show'])->where('movie', '[0-9]+');//->middleware('auth:sanctum');
    Route::put('/{movie}', [MovieController::class, 'update'])->where('movie', '[0-9]+')->middleware('auth:sanctum');
    Route::delete('/{movie}', [MovieController::class, 'destroy'])->where('movie', '[0-9]+')->middleware('auth:sanctum');
});

Route::prefix('users')->group(function() {
    Route::get('/', [UserController::class, 'index'])->middleware('auth:sanctum');
    Route::post('/', [UserController::class, 'store'])->middleware('auth:sanctum');
    Route::get('/{user}', [UserController::class, 'show'])->where('user', '[0-9]+')->middleware('auth:sanctum');
    Route::put('/{user}', [UserController::class, 'update'])->where('user', '[0-9]+')->middleware('auth:sanctum');
    Route::delete('/{user}', [UserController::class, 'destroy'])->where('user', '[0-9]+')->middleware('auth:sanctum');
    Route::post('/changePassword/{user}', [UserController::class, 'changePassword'])->where('user', '[0-9]+')->middleware('auth:sanctum');
});

Route::middleware('auth:operator')->prefix('operator')->group(function() {
    Route::get('/', [OperatorController::class, 'index']);
    Route::post('/', [OperatorController::class, 'store']);
    Route::get('/{operator}', [OperatorController::class, 'show'])->where('operator', '[0-9]+');
    Route::post('/{operator}', [OperatorController::class, 'update'])->where('operator', '[0-9]+');
    Route::delete('/{operator}', [OperatorController::class, 'destroy'])->where('operator', '[0-9]+');
    Route::post('change_password/{operator}', [OperatorController::class, 'changePassword'])->where('operator', '[0-9]+');
});


Route::get('/profile_info', [ProfileController::class, 'info'])->middleware('auth:sanctum');