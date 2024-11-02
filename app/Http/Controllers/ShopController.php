<?php

namespace App\Http\Controllers;


use App\Models\Collections;
use App\Models\CopySale;
use App\Models\DuePayment;
use App\Models\Expenses;
use App\Models\PrintSale;
use App\Models\ProductSale;
use App\Models\CashAmount;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class ShopController extends Controller
{

   
    public function addProductSales(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $request->request->add(['date' => $date]);
        
        $addProductSale = ProductSale::create($request->all());
        $productSale  = ProductSale::select('saleAmount')->where('date',$date)->get();
        return response([
            'status' => 'SUCCESS',
            'productSale' => $productSale,
            'code' => 200
        ]);

    }
    
    public function addPrintSales(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $request->request->add(['date' => $date]);
        $addPrintSale = PrintSale::create($request->all());
        $printSales  = PrintSale::select('saleAmount')->where('date',$date)->get();
        return response([
            'status' => 'SUCCESS',
            'printSale' => $printSales,
            'code' => 200
        ]);
        # code...
    }
    
    public function addCopySales(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $request->request->add(['date' => $date]);
        $addCopySale = CopySale::create($request->all());
        $copySales  = CopySale::select('saleAmount')->where('date',$date)->get();
        return response([
            'status' => 'SUCCESS',
            'copySales' => $copySales,
            'code' => 200
        ]);
        # code...
    }    
    
    public function addDuaPayment(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $request->request->add(['date' => $date]);
        $addDuePayment = DuePayment::create($request->all());
        $dueAmount  = DuePayment::select('amount')->where('date',$date)->get();

        return response([
            'status' => 'SUCCESS',
            'dueAmount' => $dueAmount,
            'code' => 200
        ]);

    }    
    
    public function addCollection(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $request->request->add(['date' => $date]);
        $addCollection = Collections::create($request->all());
        $collection  = Collections::select('amount')->where('date',$date)->get();

        return response([
            'status' => 'SUCCESS',
            'collection' => $collection,
            'code' => 200
        ]);

    }      
    
    
    public function addCashAmount(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $request->request->add(['date' => $date]);
        $addCash = CashAmount::create($request->all());
        $cash = CashAmount::select('amount')->where('date',$date)->get();

        return response([
            'status' => 'SUCCESS',
            'cash' => $cash,
            'code' => 200
        ]);

    }    
    
    public function addExpense(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $request->request->add(['date' => $date]);
        $addExpenses = Expenses::create($request->all());
        $expenses  = Expenses::select('expenseAmount')->where('date',$date)->get();

        return response([
            'status' => 'SUCCESS',
            'expenses' => $expenses,
            'code' => 200
        ]);

    }

}


