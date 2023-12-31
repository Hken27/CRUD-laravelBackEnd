<?php

use App\Http\Controllers\ProductCategoryController;
use Illuminate\Http\Request;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route :: prefix("v1")->group(function () {
    Route :: apiResource("product-category", ProductCategoryController :: class);
    // terdapat route method seperti ini:
    // Route :: get("anjay", ProductCategoryController ::class);
    // Route :: post("anjay", ProductCategoryController ::class);
    // Route :: put("anjay", ProductCategoryController ::class);
    // Route :: delete("anjay", ProductCategoryController ::class);
});