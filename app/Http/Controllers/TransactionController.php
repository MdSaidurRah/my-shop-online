<?php

namespace App\Http\Controllers;


use App\Models\MobileBanking;
use App\Models\MobileBankingBalance;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class TransactionController extends Controller
{

    public function saveTransaction(Request $request)
    { 

        $date = Carbon::now()->format('Y-m-d');

        if( $request->transactionType=='Account In')
        {
            $saveTransaction = MobileBanking::create(
                [
                    'customer_number' => $request->customer_number,
                    'provider' => $request->provider,
                    'transactionType' => $request->transactionType,
                    'amount' => $request->amount,
                    'date'=>$date
                    ]
            );

            if($request->provider =='BKASH')
            {

                $bkashBalance =  MobileBankingBalance::where('providerNmae','BKASH')->select('onlineAmount')->first();
                $newBalance  = $bkashBalance->onlineAmount + $request->amount;
                MobileBankingBalance::where('providerNmae','BKASH')->update([ 'onlineAmount' =>  $newBalance]);

            }elseif($request->provider =='NOGOD')
            {
                $nogodBalance =  MobileBankingBalance::where('providerNmae','NOGOD')->select('onlineAmount')->first();
                $newBalance  = $nogodBalance->onlineAmount + $request->amount;
                MobileBankingBalance::where('providerNmae','NOGOD')->update([ 'onlineAmount' =>  $newBalance]);

            }else
            {
                $rocketBalance =  MobileBankingBalance::where('providerNmae','ROCKET')->select('onlineAmount')->first();
                $newBalance  = $rocketBalance->onlineAmount + $request->amount;
                MobileBankingBalance::where('providerNmae','ROCKET')->update([ 'onlineAmount' =>  $newBalance]);

            }


            return response([
                'status' => 'SUCCESS',
                'message'=>"Cash In data has been save successfully",
                'code' => 200
            ]);

        }else
        {
            $saveTransaction = MobileBanking::create(
                [
                    'customer_number' => $request->customer_number,
                    'provider' => $request->provider,
                    'transactionType' => $request->transactionType,
                    'amount' => $request->amount,
                    'date'=>$date
                    ]
            );


            if($request->provider =='BKASH')
            {

                $bkashBalance =  MobileBankingBalance::where('providerNmae','BKASH')->select('onlineAmount')->first();
                $newBalance  = $bkashBalance->onlineAmount - $request->amount;
                MobileBankingBalance::where('providerNmae','BKASH')->update([ 'onlineAmount' =>  $newBalance]);

            }elseif($request->provider =='NOGOD')
            {
                $nogodBalance =  MobileBankingBalance::where('providerNmae','NOGOD')->select('onlineAmount')->first();
                $newBalance  = $nogodBalance->onlineAmount - $request->amount;
                MobileBankingBalance::where('providerNmae','NOGOD')->update([ 'onlineAmount' =>  $newBalance]);

            }else
            {
                $rocketBalance =  MobileBankingBalance::where('providerNmae','ROCKET')->select('onlineAmount')->first();
                $newBalance  = $rocketBalance->onlineAmount - $request->amount;
                MobileBankingBalance::where('providerNmae','ROCKET')->update([ 'onlineAmount' =>  $newBalance]);

            }

            return response([
                'status' => 'SUCCESS',
                'message'=>"Cash Out data has been save successfully",
                'code' => 200
            ]);

        }      
    }



    public function getBalance()
    {

        $bkashBalance =  MobileBankingBalance::where('providerNmae','BKASH')->select('onlineAmount')->first();
        $nogodBalance =  MobileBankingBalance::where('providerNmae','NOGOD')->select('onlineAmount')->first();
        $rocketBalance =  MobileBankingBalance::where('providerNmae','ROCKET')->select('onlineAmount')->first();

        return response([
            'status' => 'SUCCESS',
            'bkashBalance'=>$bkashBalance->onlineAmount,
            'nogodBalance'=>$nogodBalance->onlineAmount,
            'rocketBalance'=>$rocketBalance->onlineAmount,
            'code' => 200
        ]);
    }
    

}


