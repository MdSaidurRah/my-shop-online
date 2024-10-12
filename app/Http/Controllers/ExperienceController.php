<?php

namespace App\Http\Controllers;

use App\Models\Experience;

class ExperienceController extends Controller
{
    
    public function getExperience()
    {
        $experience  = Experience::all();
        return response(['status' => 'success', 'experience' => $experience, 'code' => 200]);
    }
    
}
