<?php

namespace App\Http\Controllers;

use App\Models\License;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class AuthenticationController extends Controller
{
    
    public function loginPost(Request $request)
    {     

        $user =  User::where('email', $request->email)
        ->where('password', $request->password)
        ->get();
        
            if(count($user)>0)
            {
                return response(['status' => 'Successful','userData'=>$user[0], 'code' => 200]);
            }else
            {
                return response(['status' => 'Fail','code' => 200]);
            }

       
    }    
    
    public function registerPost(Request $request)
    {

        try {
            
            if($request->has('subscriptionKey'))
            {

                $validKey = License::where('licenseKey', $request->subscriptionKey)->first();

                if(!isset($validKey))
                {
                     return response(['response' => 'License Key are not valid','code' => 200]);
                }

                if($validKey->noOfUses == 1)
                {
                    return response(['response' => 'License Key are already in used','code' => 200]);
                }else
                {
                    $user = User::create($request->all());
                    if($user)
                    {
                        License::where('id', $validKey->id)->update(['noOfUses' => 1]);
                    }
                    return response(['response' => 'Successful']);
                }

                
            }

          
            
        } catch (Exception $e) {
            
            return $e->getMessage();
         
          
        }

    }
}
