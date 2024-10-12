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


Route::get('/all-product-salse',[ShopController::class,'allProductSales']);
Route::get('/add-product-salse',[ShopController::class,'addProductSales']);

Route::get('/all-print-salse',[ShopController::class,'allPrintSales']);
Route::get('/add-print-salse',[ShopController::class,'addPrintSales']);

Route::get('/all-copy-salse',[ShopController::class,'allCopySales']);
Route::get('/add-copy-salse',[ShopController::class,'addCopySales']);

Route::get('/all-due-payment',[ShopController::class,'allDuaPayment']);
Route::get('/add-due-payment',[ShopController::class,'addDuaPayment']);

Route::get('/all-collection',[ShopController::class,'allCollection']);
Route::get('/add-collection',[ShopController::class,'addCollection']);

Route::get('/all-datas',[ShopController::class,'allData']);






Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);