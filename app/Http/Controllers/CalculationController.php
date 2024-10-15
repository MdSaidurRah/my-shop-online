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


class CalculationController extends Controller
{

    public function dailyBusinessSummery()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $productSale  =  ProductSale::where('date',$date)->sum('saleAmount');
        $copySale  =  CopySale::where('date',$date)->sum('saleAmount');
        $printSale  =  PrintSale::where('date',$date)->sum('saleAmount');

        $duePayment  =  DuePayment::where('date',$date)->sum('amount');
        $expense  =  Expenses::where('date',$date)->sum('expenseAmount');
        $collections  =  Collections::where('date',$date)->sum('amount');

        $totalIncome = $productSale + $copySale + $printSale + $collections;
        $totalExpense = $duePayment + $expense;
        $finalStatus = $totalIncome - $totalExpense;

        $businessStatus = '';

        if($totalIncome>$totalExpense)
        {
            $businessStatus = "Income";
        }else
        {
            $businessStatus = "Loss";
        }
        
      
        return response([
            'status' => 'SUCCESS',
            'productSale' => $productSale,
            'copySale' => $copySale,
            'printSale' => $printSale,
            'duePayment' => $duePayment,
            'expense' => $expense,
            'collections' => $collections,
            'totalIncome' => $totalIncome,
            'totalExpense' => $totalExpense,
            'finalStatus' => $finalStatus,
            'businessStatus' => $businessStatus,
            'code' => 200
        ]);
    }      
    
    public function dailyCollection()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $collection  = Collections::where('date',$date)->get();
      
        return response([
            'status' => 'SUCCESS',
            'collection' => $collection,
            'code' => 200
        ]);
    }      
    
    public function dailyDuePayment()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $duePayment  = DuePayment::where('date',$date)->get();
      
        return response([
            'status' => 'SUCCESS',
            'duePayment' => $duePayment,
            'code' => 200
        ]);
    }    
    
    public function dailyExpense()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $expenses  = Expenses::where('date',$date)->get();
      
        return response([
            'status' => 'SUCCESS',
            'expenses' => $expenses,
            'code' => 200
        ]);
    }

    
    

}


