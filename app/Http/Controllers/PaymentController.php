<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function paymentProceed(Request $request)
    {

        $license_key = $this->generate_license_key();

        License::create([
            'licenseKey'=>$license_key, 
            'subscriptionKeyValidity'=>'2030-12-10', 
            'subscriptionKeyStatus'=>'ACTIVE',
            'noOfUses'=>1
        ]);
        return response(['status' => 'success','subscriptionKey'=>$license_key, 'code' => 200]);
    }

    function generate_license_key() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $key = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 20; $i++) {
            $n = rand(0, $alphaLength);
            $key[] = $alphabet[$n];
        }
        return implode($key);
    }

   
}
