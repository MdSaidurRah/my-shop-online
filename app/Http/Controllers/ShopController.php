<?php

namespace App\Http\Controllers;


use App\Models\Collections;
use App\Models\CopySale;
use App\Models\DuePayment;
use App\Models\Expenses;
use App\Models\PrintSale;
use App\Models\ProductSale;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class ShopController extends Controller
{

    public function allData()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $productSale  = ProductSale::where('date',$date)->count();
        $copySales  = CopySale::where('date',$date)->count();
        $printSales  = PrintSale::where('date',$date)->count();
        $dueAmount  = DuePayment::where('date',$date)->count();
        $collection  = Collections::where('date',$date)->count();
        $expenses  = Expenses::where('date',$date)->count();

        return response([
            'status' => 'success',
            'productSale' => $productSale,
            'copySale' => $copySales,
            'printSale' => $printSales,
            'dueAmount' => $dueAmount,
            'collection' => $collection, 
            'expenses' => $expenses, 
            'code' => 200
        ]);
    }

    public function addProductSales(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        
       
        
        $request->request->add(['date' => $date]);
         Log::info($request);
        
        $addProductSale = ProductSale::create($request->all());
        $productSale  = ProductSale::where('date',$date)->count();
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
        $printSales  = PrintSale::where('date',$date)->count();
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
        $copySales  = CopySale::where('date',$date)->count();
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
        $dueAmount  = DuePayment::where('date',$date)->count();

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
        $collection  = Collections::where('date',$date)->count();

        return response([
            'status' => 'SUCCESS',
            'collection' => $collection,
            'code' => 200
        ]);

    }    
    
    public function addExpense(Request $request)
    {
        $date = Carbon::now()->format('Y-m-d');
        $request->request->add(['date' => $date]);
        $addExpenses = Expenses::create($request->all());
        $expenses  = Expenses::where('date',$date)->count();

        return response([
            'status' => 'SUCCESS',
            'expenses' => $expenses,
            'code' => 200
        ]);

    }

}


