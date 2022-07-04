<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;

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
Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    route::get("data",[dummyAPI::class,"getData"]);
    route::get("dataof",[DeviceController::class,"list"]);
    route::get("dataof/{id?}",[DeviceController::class,"list"]);
    route::post("add",[DeviceController::class,"add"]);
    route::put("update",[DeviceController::class,"update"]);
    route::get("search/{name}",[DeviceController::class,"search"]);
    route::delete("delete/{id}",[DeviceController::class,"delete"]);
    });

Route::post("login",[UserController::class,'index']);
Route::post("upload",[FileController::class,'upload']);