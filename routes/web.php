<?php


use App\Http\Controllers\DataController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CalculationController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\TransactionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/save-transaction',[TransactionController::class,'saveTransaction']);
Route::get('/get-balance',[TransactionController::class,'getBalance']);


Route::get('/cash-amount',[SalesController::class,'cashAmount']);
Route::get('/product-sales-data',[SalesController::class,'productSalesData']);
Route::get('/print-sales-data',[SalesController::class,'printSalesData']);
Route::get('/copy-sales-data',[SalesController::class,'copySalesData']);


Route::get('/daily-business-summery',[CalculationController::class,'dailyBusinessSummery']);
Route::post('/dated-business-summery',[CalculationController::class,'datedBusinessSummery']);



Route::get('/daily-expense',[CalculationController::class,'dailyExpense']);
Route::get('/daily-due-payment',[CalculationController::class,'dailyDuePayment']);
Route::get('/daily-collection',[CalculationController::class,'dailyCollection']);

Route::post('/get-due-data',[CalculationController::class,'getDueData']);
Route::post('/due-transaction',[CalculationController::class,'dueTransaction']);


Route::get('/all-data-table',[DataController::class,'allDataTable']);



Route::post('/save-product-sales',[ShopController::class,'addProductSales']);
Route::post('/save-print-sales',[ShopController::class,'addPrintSales']);
Route::post('/save-copy-sales',[ShopController::class,'addCopySales']);



Route::post('/save-cash-amount',[ShopController::class,'addCashAmount']);


Route::post('/save-due-payment',[ShopController::class,'addDuaPayment']);
Route::post('/save-collection',[ShopController::class,'addCollection']);
Route::post('/save-expense',[ShopController::class,'addExpense']);


Route::post('/add-collection',[ShopController::class,'addCollection']);



Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);