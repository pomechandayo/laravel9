<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceContainerStudyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::controller(ServiceContainerStudyController::class)->group(function () {
    Route::get('/service-container-study', 'index');
});
Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index');
});
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index');
    Route::post('/admin/store', 'store');
});

// Route::get('/test', function () {
//     return json_encode(['ary' => 'Hello World1']);
// });
Route::middleware('auth:sanctum')->get('/test', function () {
    return json_encode(['ary' => 'Hello World1']);
});