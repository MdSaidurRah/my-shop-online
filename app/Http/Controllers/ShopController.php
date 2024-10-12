<?php

namespace App\Http\Controllers;


use App\Models\Collections;
use App\Models\CopySale;
use App\Models\DuePayment;
use App\Models\PrintSale;
use App\Models\ProductSale;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;


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

        return response(['status' => 'success',
            'productSale' => $productSale,
            'copySale' => $copySales,
            'printSale' => $printSales,
            'dueAmount' => $dueAmount,
            'collection' => $collection, 'code' => 200]);
    }

}
