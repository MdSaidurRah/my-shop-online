<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    use HasFactory;

    protected $table = 'collections';
    public $timestamps = 'false';
    protected $fillable = ['shopId', 'customerName', 'referenceItem', 'amount', ];

}
