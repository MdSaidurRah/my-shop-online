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

    public function dueTransaction(Request $request)
    { 


        Log::info($request);

        $dues = DuePayment::where('id',$request->id)->select('*')->get();
        $currentDue = $dues[0]->amount;
        $paymentAmount = $request->amount;

        $date = Carbon::now()->format('Y-m-d');

        if( $request->transactionType =="New Due")
        {
            $amount = $paymentAmount+$currentDue;
            DuePayment::where('id', $request->id)
            ->update([
                'amount'=>$amount,
                'balance'=>'Advance'
            ]);

            return response([
                'status' => 'SUCCESS',
                'message' => 'New Dues payment has been added.',
                'code' => 200
            ]);

        }else
        {
            if( $currentDue == $paymentAmount)
            {
                    $payment = Collections::create([
                        'customerName' =>  $dues[0]->customerName,
                        'referenceItem' =>  $dues[0]->referenceItem,
                        'amount' => $dues[0]->amount,
                        'date' =>  $date,
                        'collectionType'=>'Due Payment'
                    ]);

                    DuePayment::where('id', $request->id)
                    ->update(['amount'=>0]);
                    
                    return response([
                        'status' => 'SUCCESS',
                        'message' =>'Dues payment has successfully and fully paid',
                        'code' => 200
                    ]);

            }else if($currentDue > $paymentAmount )
            {
                    $amount = $currentDue - $paymentAmount;
                    DuePayment::where('id', $request->id)
                    ->update(['amount'=>$amount ]);

                    $payment = Collections::create([
                        'customerName' =>  $dues[0]->customerName,
                        'referenceItem' =>  $dues[0]->referenceItem,
                        'amount' => $paymentAmount ,
                        'date' =>  $date,
                        'collectionType'=>'Due Payment'
                    ]);

                    return response([
                        'status' => 'SUCCESS',
                        'message' => 'Dues payment has partialy paid',
                        'code' => 200
                    ]);

            }
            else if($currentDue < $paymentAmount )
            {
                    $amount = $paymentAmount-$currentDue;
                    DuePayment::where('id', $request->id)
                    ->update([
                        'amount'=>$amount,
                        'balance'=>'Advance'
                    ]);

                    $payment = Collections::create([
                        'customerName' =>  $dues[0]->customerName,
                        'referenceItem' =>  $dues[0]->referenceItem,
                        'amount' => $paymentAmount,
                        'date' =>  $date,
                        'collectionType'=>'Due Payment'
                    ]);

                    return response([
                        'status' => 'SUCCESS',
                        'message' => 'Dues payment has advance paid',
                        'code' => 200
                    ]);

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


