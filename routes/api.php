<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\BrandsLogoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\StatisticsController;


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




Route::post('admin/login', [AdminController::class, 'login']);
Route::post('admin/logout', [AdminController::class, 'logout'])->middleware('auth:sanctum');



Route::get('agents', [AgentController::class, 'index']);
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::post('agents', [AgentController::class, 'store']);
    Route::get('agents/{id}', [AgentController::class, 'show']);
    Route::put('agents/{id}', [AgentController::class, 'update']);
    Route::delete('agents/{id}', [AgentController::class, 'destroy']);
});


Route::get('categories', [CategoryController::class, 'index']);
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::post('categories', [CategoryController::class, 'store']);
    Route::get('categories/{id}', [CategoryController::class, 'show']);
    Route::put('categories/{id}', [CategoryController::class, 'update']);
    Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
});


Route::get('sub-categories', [SubCategoryController::class, 'index']);
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::post('sub-categories', [SubCategoryController::class, 'store']);
    Route::get('sub-categories/{id}', [SubCategoryController::class, 'show']);
    Route::put('sub-categories/{id}', [SubCategoryController::class, 'update']);
    Route::delete('sub-categories/{id}', [SubCategoryController::class, 'destroy']);
});



Route::get('properties', [PropertyController::class, 'index']);
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::post('properties', [PropertyController::class, 'store']);
    
    Route::put('properties/{id}', [PropertyController::class, 'update']);
    Route::delete('properties/{id}', [PropertyController::class, 'destroy']);
});


Route::post('inquiries', [InquiryController::class, 'store']);
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::get('inquiries', [InquiryController::class, 'index']);
    Route::delete('inquiries/{id}', [InquiryController::class, 'destroy']);
});




Route::post('contacts', [ContactController::class, 'store']);
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::get('contacts', [ContactController::class, 'index']);
    Route::delete('contacts/{id}', [ContactController::class, 'destroy']);
});


Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::get('seo', [SeoController::class, 'index']);
    Route::post('seo', [SeoController::class, 'store']);
    Route::get('seo/{id}', [SeoController::class, 'show']);
    Route::put('seo/{id}', [SeoController::class, 'update']);
    Route::delete('seo/{id}', [SeoController::class, 'destroy']);
});



Route::get('brands-logos', [BrandsLogoController::class, 'index']);
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::post('brands-logos', [BrandsLogoController::class, 'store']);
    Route::delete('brands-logos/{id}', [BrandsLogoController::class, 'destroy']);
});
 


Route::get('blogs', [BlogController::class, 'index']);
Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::post('blogs', [BlogController::class, 'store']);
   
    Route::put('blogs/{id}', [BlogController::class, 'update']);
    Route::delete('blogs/{id}', [BlogController::class, 'destroy']);
});



Route::middleware('auth:sanctum')->get('admin/statistics/counts', [StatisticsController::class, 'counts']);



//WEBSITE ROUTES

Route::get('properties/category/random/{categoryId}', [PropertyController::class, 'propertiesByCategoryrandomly']);

Route::get('properties/category/{categoryId}', [PropertyController::class, 'propertiesByCategory']);

Route::get('agents/random', [AgentController::class, 'randomAgents']); 

Route::get('blogs/{slug}', [BlogController::class, 'show']);

Route::get('properties/{name}', [PropertyController::class, 'show']);


//LIST YOUR PROPERTY ROUTES

Route::post('/list-your-properties', [ListYourPropertyController::class, 'store']);

Route::prefix('admin')->middleware('auth:sanctum')->group(function () {
    Route::get('/list-your-properties', [ListYourPropertyController::class, 'index']);
});