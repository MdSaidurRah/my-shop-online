<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EducationController extends Controller
{



    
    public function getEducation()
    {
        $education  = Education::all();
        return response(['status' => 'success', 'education' => $education, 'code' => 200]);
    }
    

    public function store(Request $request)
    {
        Log::info($request);
        $education  = Education::create([
            'degreeName'=>$request->degreeName, 
            'instituteName'=>$request->instituteName,
             'year'=>$request->year, 
             'country'=>$request->country, 
             'language'=>$request->language
        ]);
        return response(['status' => 'success', 'message' => "Eudcation data has been successfully saved", 'code' => 200]);
    }    
    
   
}
