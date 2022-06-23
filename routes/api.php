<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequestProductController;
use App\Http\Controllers\CommentController;



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
Route::resources([
    'customers' => CustomerController::class,
    'branches' => BranchController::class,
    'campaigns' => CampaignController::class,
    'requests' => RequestController::class,
    'items' => ItemController::class,

]);
