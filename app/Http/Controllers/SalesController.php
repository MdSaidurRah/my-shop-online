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


class SalesController extends Controller
{

    public function copySalesData()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $copySale  = CopySale::where('date',$date)->get();
      
        return response([
            'status' => 'SUCCESS',
            'copySale' => $copySale,
            'code' => 200
        ]);
    }

    public function productSalesData()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $productSale  = ProductSale::where('date',$date)->get();
      
        return response([
            'status' => 'SUCCESS',
            'productSale' => $productSale,
            'code' => 200
        ]);
    }

    public function printSalesData()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $printSale  = PrintSale::where('date',$date)->get();
      
        return response([
            'status' => 'SUCCESS',
            'printSale' => $printSale,
            'code' => 200
        ]);
    }

    

}


