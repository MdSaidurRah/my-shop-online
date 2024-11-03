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


class CalculationController extends Controller
{

    public function dueTransaction(Request $request)
    { 
        
        $dues = DuePayment::where('id',$request->id)->select('*')->get();
        $currentDue = $dues[0]->amount;
        $payAmount = $request->amount;
        $transactionType = $request->transactionType;
        $balanceStatus = $dues[0]->balance;
        $date = Carbon::now()->format('Y-m-d');

        if($balanceStatus == "ADVANCED")
        {

            $balaceAmount =  $dues[0]->amount;

            if( $request->transactionType == "New Due")
            {

                if($payAmount>$balaceAmount)
                {
                    $amount = $payAmount-$balaceAmount;
                    DuePayment::where('id', $request->id)
                    ->update([
                        'amount'=>$amount,
                        'balance'=>'DUE'
                    ]);
                    return response([
                        'status' => 'SUCCESS',
                        'message' => 'New Due adjusted with previoue amount.',
                        'code' => 200
                    ]);
                }elseif($payAmount==$balaceAmount)
                {
                    $amount = $balaceAmount - $payAmount;
                    DuePayment::where('id', $request->id)
                    ->update([
                        'amount'=>$amount,
                        'balance'=>'BALANCED'
                    ]);
                    return response([
                        'status' => 'SUCCESS',
                        'message' => 'New Due adjusted with previoue amount.',
                        'code' => 200
                    ]);
                }else
                {
                    $amount =$balaceAmount - $payAmount;
                    DuePayment::where('id', $request->id)
                    ->update([
                        'amount'=>$amount,
                        'balance'=>'ADVANCED'
                    ]);
                    return response([
                        'status' => 'SUCCESS',
                        'message' => 'New Due adjusted with previoue amount.',
                        'code' => 200
                    ]);
                }
            }
            elseif( $request->transactionType == "Due Payment")
            {
                    $amount = $payAmount + $balaceAmount;
                    DuePayment::where('id', $request->id)
                    ->update([
                        'amount'=>$amount,
                        'balance'=>'ADVANCED'
                    ]);

                    $addCollection = Collections::create
                    (
                        [
                        'customerName'=>$request->customerName,
                        'referenceItem'=>$request->id, 
                        'amount'=>$payAmount,
                        'date'=>$date,
                        'collectionType'=>"Due Collection"
                        ]
                    );

                    return response([
                        'status' => 'SUCCESS',
                        'message' => 'New Payment adjusted as Advance amount.',
                        'code' => 200
                    ]);                    
            }
        }elseif($balanceStatus == "DUE")
        {

            $dueAmount =  $dues[0]->amount;

            if( $request->transactionType == "New Due")
            {
                if($payAmount>$dueAmount)
                {
                    $amount = $payAmount + $dueAmount;
                    DuePayment::where('id', $request->id)
                    ->update([
                        'amount'=>$amount,
                        'balance'=>'DUE'
                    ]);
                    return response([
                        'status' => 'SUCCESS',
                        'message' => 'New Due adjusted with previoue amount.',
                        'code' => 200
                    ]);
                }
            }
            elseif($request->transactionType == "Due Payment")
            {
                $dueAmount =  $dues[0]->amount;
                if($dueAmount > $payAmount)
                {
                    $amount = $dueAmount - $payAmount ;
                    DuePayment::where('id', $request->id)
                    ->update([
                        'amount'=>$amount,
                        'balance'=>'DUE'
                    ]);

                    $addCollection = Collections::create
                    (
                        [
                        'customerName'=>$request->customerName,
                        'referenceItem'=>$request->id, 
                        'amount'=>$payAmount,
                        'date'=>$date,
                        'collectionType'=>"Due Collection"
                        ]
                    );

                    return response([
                        'status' => 'SUCCESS',
                        'message' => 'New Due adjusted with previoue amount.',
                        'code' => 200
                    ]);
                }elseif($dueAmount == $payAmount)
                {
                    $amount = $dueAmount - $payAmount ;
                    DuePayment::where('id', $request->id)
                    ->update([
                        'amount'=>$amount,
                        'balance'=>'BALANCED'
                    ]);

                    $addCollection = Collections::create
                    (
                        [
                        'customerName'=>$request->customerName,
                        'referenceItem'=>$request->id, 
                        'amount'=>$payAmount,
                        'date'=>$date,
                        'collectionType'=>"Due Collection"
                        ]
                    );

                    return response([
                        'status' => 'SUCCESS',
                        'message' => 'New Due adjusted with previoue amount.',
                        'code' => 200
                    ]);
                }else{
                    $amount = $payAmount - $dueAmount ;
                    DuePayment::where('id', $request->id)
                    ->update([
                        'amount'=>$amount,
                        'balance'=>'ADVANCED'
                    ]);

                    $addCollection = Collections::create
                    (
                        [
                        'customerName'=>$request->customerName,
                        'referenceItem'=>$request->id, 
                        'amount'=>$payAmount,
                        'date'=>$date,
                        'collectionType'=>"Due Collection"
                        ]
                    );

                    return response([
                        'status' => 'SUCCESS',
                        'message' => 'New Due adjusted with previoue amount.',
                        'code' => 200
                    ]);
                }     
            }
        }
              
    }


    public function getDueData(Request $request)
    { 
        $duePayment  =  DuePayment::where('id',$request->dueItem)->get();
        return response([
            'status' => 'SUCCESS',
            'duePayment' => $duePayment,
            'code' => 200
        ]);
    }



    public function datedBusinessSummery(Request $request)
    {
        $date =$request->date;
        
        $productSale  =  ProductSale::where('date',$date)->sum('saleAmount');
        $copySale  =  CopySale::where('date',$date)->sum('saleAmount');
        $printSale  =  PrintSale::where('date',$date)->sum('saleAmount');

        $duePayment  =  DuePayment::where('date',$date)->where('balance','DUE')->sum('amount');
        $expense  =  Expenses::where('date',$date)->sum('expenseAmount');
        $collections  =  Collections::where('date',$date)->sum('amount');
        $cashAmount  =  CashAmount::where('date',$date)->sum('amount');

        $totalIncome = $productSale + $copySale + $printSale + $collections ;
        $totalExpense = $expense + $duePayment;
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
            'cashAmount' => $cashAmount,
            'code' => 200
        ]);
    }     
    
    
    public function dailyBusinessSummery()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $productSale  =  ProductSale::where('date',$date)->sum('saleAmount');
        $copySale  =  CopySale::where('date',$date)->sum('saleAmount');
        $printSale  =  PrintSale::where('date',$date)->sum('saleAmount');

        $duePayment  =  DuePayment::where('date',$date)->sum('amount');
        $expense  =  Expenses::where('date',$date)->sum('expenseAmount');
        $collections  =  Collections::where('date',$date)->sum('amount');

        $cashAmount  =  CashAmount::where('date',$date)->sum('amount');

        $totalIncome = $productSale + $copySale + $printSale + $collections ;
        $totalExpense = $expense + $duePayment;
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
            'cashAmount' => $cashAmount,
            'code' => 200
        ]);
    }      
    
    public function dailyCollection()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $collection  = Collections::where('date',$date)->where('amount','>', 0)->get();
      
        return response([
            'status' => 'SUCCESS',
            'collection' => $collection,
            'code' => 200
        ]);
    }      
    
    public function dailyDuePayment()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $duePayment  = DuePayment::select('*')->where('amount', '>', 0)->orderBy('id','DESC')->get();
      
        return response([
            'status' => 'SUCCESS',
            'duePayment' => $duePayment,
            'code' => 200
        ]);
    }    
    
    public function dailyExpense()
    {
        $date = Carbon::now()->format('Y-m-d');
        
        $expenses  = Expenses::where('date',$date)->where('expenseAmount','>', 0)->get();
      
        return response([
            'status' => 'SUCCESS',
            'expenses' => $expenses,
            'code' => 200
        ]);
    }

    
    

}


