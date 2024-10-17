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


class DataController extends Controller
{

    public function allDataTable()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $productSale  = ProductSale::select('saleAmount')->where('date',$date)->get();
        $copySales  = CopySale::select('saleAmount')->where('date',$date)->get();
        $printSales  = PrintSale::select('saleAmount')->where('date',$date)->get();
        $dueAmount  = DuePayment::select('amount')->where('date',$date)->get();
        $collection  = Collections::select('amount')->where('date',$date)->get();
        $expenses  = Expenses::select('expenseAmount')->where('date',$date)->get();

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


    

}


