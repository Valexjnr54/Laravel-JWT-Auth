<?php

use App\Http\Controllers\Api\UserController;
use App\Models\User;
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
//Route::group(['middleware'])
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class,'login']);
Route::delete('delete-account', [UserController::class, 'deleteAccount']);
Route::get('profile', [UserController::class, 'profile']);
Route::post('logout', [UserController::class, 'logout']);
