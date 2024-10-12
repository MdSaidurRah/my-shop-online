<?php

namespace App\Http\Controllers;

use App\Models\Circular;

class CircularController extends Controller
{
    
    public function getCircular()
    {
        $circular  = Circular::all();
        return response(['status' => 'success', 'circular' => $circular, 'code' => 200]);
    }
    
}
