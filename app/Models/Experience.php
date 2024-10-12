<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $table = 'experience';
    public $timestamp = 'false';
    protected $fillable = [ 'user_id', 'designation', 'institutionName', 'startDate', 'endDate', 'keyResponsibilities', 'reasonToLeave', 'referencePerson'];

}
