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


class DataController extends Controller
{

    public function allDataTable()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $productSale  = ProductSale::select('saleAmount')->where('date',$date)->where('saleAmount','!=', 0)->get();
        $copySales  = CopySale::select('saleAmount')->where('date',$date)->where('saleAmount','!=', 0)->get();
        $printSales  = PrintSale::select('saleAmount')->where('date',$date)->where('saleAmount','!=', 0)->get();
        $dueAmount  = DuePayment::select('amount')->where('date',$date)->where('amount','!=', 0)->get();
        $collection  = Collections::select('amount')->where('date',$date)->where('amount','!=', 0)->get();
        $expenses  = Expenses::select('expenseAmount')->where('date',$date)->where('expenseAmount','!=', 0)->get();
        $cashAmount  = CashAmount::select('amount')->where('date',$date)->where('amount','!=', 0)->get();

        return response([
            'status' => 'success',
            'productSale' => $productSale,
            'copySale' => $copySales,
            'printSale' => $printSales,
            'dueAmount' => $dueAmount,
            'collection' => $collection, 
            'expenses' => $expenses, 
            'cashAmount' => $cashAmount, 
            'code' => 200
        ]);
    }


      

}


