<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashAmount extends Model
{
    use HasFactory;

    protected $table = 'cash_amount';
    public $timestamps = false;
    protected $fillable = ['shopId', 'cashType','amount','date' ];

}
