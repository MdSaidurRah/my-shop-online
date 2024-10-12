<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CircularController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/get-education',[EducationController::class,'getEducation']);
Route::post('/login-post',[AuthenticationController::class,'loginPost']);
Route::post('/register-post',[AuthenticationController::class,'registerPost']);
Route::post('/payment-proceed',[PaymentController::class,'paymentProceed']);



Route::get('/get-education',[EducationController::class,'getEducation']);
Route::post('/store-education',[EducationController::class,'store']);



Route::get('/get-experience',[ExperienceController::class,'getExperience']);
Route::get('/get-circular',[CircularController::class,'getCircular']);









Route::get('/all-data',[ShopController::class,'allData']);

Route::post('/save-product-sales',[ShopController::class,'addProductSales']);
Route::post('/save-print-sales',[ShopController::class,'addPrintSales']);
Route::post('/save-copy-sales',[ShopController::class,'addCopySales']);


Route::post('/save-due-payment',[ShopController::class,'addDuaPayment']);
Route::post('/save-collection',[ShopController::class,'addCollection']);
Route::post('/save-expense',[ShopController::class,'addExpense']);


Route::post('/add-collection',[ShopController::class,'addCollection']);







Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);