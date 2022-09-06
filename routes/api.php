<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequestsProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;



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
Route::middleware(['auth:sanctum'])->group(function () {
    Route::resources([
        'customers' => CustomerController::class,
        'phones' => PhoneController::class,
        'products' => ProductController::class,
        'requests' => RequestController::class,
        'requests_products' => RequestsProductController::class,
        'comments' => CommentController::class,

    ]);

});
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);


