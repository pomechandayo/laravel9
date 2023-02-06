<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceContainerStudyController;
use App\Http\Controllers\Studycontroller;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/users/authorization', 'get_users');
    });
});

Route::controller(ServiceContainerStudyController::class)->group(function () {
    Route::get('/service-container-study', 'index');
    Route::get('/calculator', 'tax');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index');
    Route::get('/users/name', 'get_users_name');
    Route::delete('/users/{id}', 'delete_user');
    Route::get('/users/removed', 'get_users_name_removed_only');
});
Route::controller(Studycontroller::class)->group(function () {
    Route::get('/authorization', 'authorization');
});
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index');
    Route::get('/admin/test', 'get_user');
    Route::post('/admin/store', 'store');
});

// Route::get('/test', function () {
//     return json_encode(['ary' => 'Hello World1']);
// });
Route::middleware('auth:sanctum')->get('/test', function () {
    return json_encode(['ary' => 'Hello World1']);
});
